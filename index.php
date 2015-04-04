	<head>
		<title>Tipify | Home Page </title>
		<link rel = 'stylesheet' type = 'text/css' href = 'assets/css/main.css'>
		<link rel = 'stylesheet' href = 'assets/css/bootstrap/css/bootstrap.min.css'>
		<link rel = 'stylesheet' type = 'text/css' href = 'assets/css/animate.css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
	</head>


	<body class = 'tipify'>


	

		<script type="text/javascript">

	     	function toggle_visibility(id) {
	       		var e = document.getElementById(id);
	       			if(e.style.display == 'block')
	         		  e.style.display = 'none';
	      			else
	      			  //e.classList.add('animated zoomOut');
	          		  e.style.display = 'block';
	    	}
		</script>



	<div id = 'popup-box1' class='popup-position'>
		<div id = 'popup-wrapper'>
			<div id = 'popup-container' class = 'animated zoomIn'>
			
				<form class = 'login_form'>
					<div class = 'whole_form'>
						
					</div> <!-- Whole form -->


				</form>

				<div class = 'close_button'><a href='javascript:void(0)' onclick = "toggle_visibility('popup-box1')">x</a></div>
			</div> <!-- popup container -->
		</div> <!-- popup wrapper end -->
	</div> <!-- popup_box1 end -->






		<header class = 'container-fluid '>
			<img id = 'logo' src = 'assets/css/images/logo.gif'>

			<div class="rightCorner">
  				<a href = 'javascript:void(0)' onclick = "toggle_visibility('popup-box1')" class = 'login' id = 'login'> Login</a>
  				<a href = 'javascript:void(0)' onclick = "toggle_visibility('popup-box1')" class = "register" id='signup'> Sign Up </a>
			</div>

		</header>

		
		<section id = 'main_section'>

		
			<h1>Add a Carousel Slide show herer</h1>
		

		<div class= 'container'  >
			<div class = 'row'>

				<div class = 'col-sm-4 box first'>
						<img src = 'assets/css/images/fire.jpg' class = 'img1'>
				</div>
				
				<div class = 'col-sm-4 box second'>
						<img src = 'assets/css/images/service.jpg' class = 'img2'>
				</div>
				
				<div class = 'col-sm-4 box third'>
						<img src = 'assets/css/images/fire.jpg' class = 'img3'>
				</div>

			</div>
		</div>
		

		</section>


	

		<div style = 'background: #5cc642; height:100px; width: 100%'></div>  <!-- DELETE THIS -->
		


		

		<div id='geolocation'>
			<h3> Click here to determine your longitude and latitude</h3>
			<div class = 'pacman'>
				<svg width="120px" height="120px" viewBox="0 0 100 100" preserveAspectRatio="xMidYMid" class="uil-pacman">
				<rect x="0" y="0" width="100" height="100" fill="#ffffff" class="bk"/>
				<path d="M0 50A50 50 0 1 0 100 50" fill="#f0c741" transform="rotate(30 50 50)">
				<animateTransform attributeName="transform" type="rotate" dur="1s" repeatCount="indefinite" from="30 50 50" to="30 50 50" values="30 50 50;0 50 50;30 50 50"/>
				</path>
				<path d="M0 50A50 50 0 1 1 100 50" fill="#f0c741" transform="rotate(-30 50 50)">
				<animateTransform attributeName="transform" type="rotate" dur="1s" repeatCount="indefinite" from="-30 50 50" to="-30 50 50" values="-30 50 50;0 50 50;-30 50 50"/>
				</path>
				</svg>
			</div>
		</div>

		





		<footer>
			<h2> This will be my footer</h2>
			<h2> Why don't you guys install my app</h2>
		</footer>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type = 'text/javascript' src = 'assets/js/main.js'></script>
		<script type = 'text/javascript' src = 'assets/prototypes/geolocation.js'></script> <!-- Add this to your main.js file soon -->
		<script type = 'text/javascript' src = 'assets/prototypes/6digit.js'></script> <!-- Add this to your main.js file soon -->
		<script type= 'text/javascript' src='assets/css/wow_js/wow.js'></script>
		<script>
			 new WOW().init();
		</script>



		

	
	</body>
