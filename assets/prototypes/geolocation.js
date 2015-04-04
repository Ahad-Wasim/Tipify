$('document').ready(function() {
    var x = document.getElementById('geolocation');
    $('#geolocation').click(function() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition,geoError);
        } else {
            x.innerHTML = "We couldn't determine your exact coordinates. Try manually searching the restaurant instead";
        }

        function showPosition(position) {
            //console.log('if I got here my code is working',position);

            x.innerHTML = "Latitude:" + position.coords.latitude + "<br>Longitude: " + position.coords.longitude;
        }

        function geoError () {
        	x.innerHTML = 'all right I guess we\'ll have to do this the hard way';
        }
    });
});