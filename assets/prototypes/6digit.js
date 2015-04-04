//6 digit generator for javascript

function makeid() {
    var text = "";
    var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
    for (var i = 0; i < 6; i++) text += possible.charAt(Math.floor(Math.random() * possible.length));
    return text;
    //console.log(text);
    // we will assign this to be the uniqe id of the employee
}