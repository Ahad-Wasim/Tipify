<!--
	Author: Ahad Wasim
	Published: April 18th;

	I own all CopyRights
-->
	<head>
		<title>Tipify | Home Page </title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel = 'stylesheet' type = 'text/css' href = 'assets/css/main.css'>
		<link rel = 'stylesheet' href = 'assets/css/bootstrap/css/bootstrap.min.css'>
		<link rel = 'stylesheet' type = 'text/css' href = 'assets/css/animate.css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
		<link rel='stylesheet' href = 'assets/css/font-awesome/css/font-awesome.min.css'>
	</head>

	<style>
	body{
		margin-top:68px;
	}

	.navbar-inner {
    	min-height: 0px;
	}

	.navbar-brand,
	.navbar-nav li a {
	    line-height: 70px;
	    height: 70px;
	    padding-top: 0;
	}

	.navbar-brand img{
		margin-top: 6px;
		margin-left: 5%;
	}
	.navbar-inverse .navbar-nav>li>a {
  		font-size: 1.5em;
  		color:#ffffff;
	}

	.navbar-inverse .navbar-nav>li>a:hover{
		color:#5CC642;
	}
	</style>

	<header>
	<nav class="navbar navbar-inverse navbar-fixed-top ">  <!-- navbar-static-top -->
		<div class = 'container'>
			<div class = 'navbar-header'>
				<button type='button' class = 'navbar-toggle' data-toggle='collapse' data-target='#example'>
					<span class = 'icon-bar'></span>
					<span class = 'icon-bar'></span>
					<span class = 'icon-bar'></span> 
				</button>

				 <a class="navbar-brand" href="www.http://ahadwasim.com/"><img src = 'assets/css/images/Tipify_logo.png'></a>	
			</div>

			<div class = 'collapse navbar-collapse' id='example'>
				<ul class = 'nav navbar-nav navbar-right'>
					<li class = 'bar-color'><a href = '#'>About</a></li>
					<li class = 'bar-color'><a href = '#'>How It Works</a></li>
					<li class = 'bar-color'><a href = '#'>Restaurants</a></li>
					<li class = 'bar-color'><a href = '#user' data-toggle = 'modal' class = 'login guide'>Login</a> </li>

				</ul>
			</div>

		</div>
	</nav>
	
</header>	




	<body class = 'tipify'>


	

		<script type="text/javascript">

	     // 	function toggle_visibility(id) {
	     //   		var e = document.getElementById(id);
	     //   			if(e.style.display == 'block')
	     //     		  e.style.display = 'none';
	     //  			else
	     //  			  //e.classList.add('animated zoomOut');
	     //      		  e.style.display = 'block';
	    	// }
		</script>


<?php
	// <div id = 'popup-box1' class='popup-position'>
	// 	<div id = 'popup-wrapper'>
	// 		<div id = 'popup-container' class = 'animated zoomIn'>
			
	// 			<form class = 'login_form'>
	// 				<div class = 'whole_form'>
						
	// 				</div> <!-- Whole form -->
	// 			</form>

	// 			<div class = 'close_button'><a href='javascript:void(0)' onclick = "toggle_visibility('popup-box1')">x</a></div>
	// 		</div> <!-- popup container -->
	// 	</div> <!-- popup wrapper end -->
	// </div> <!-- popup_box1 end -->
	?>





		
		<!-- <header class = 'container-fluid '>
			<img id = 'logo' src = 'assets/css/images/logo.gif'>

			<div class="rightCorner">
  				<a href = 'javascript:void(0)' onclick = "toggle_visibility('popup-box1')" class = 'login' id = 'login'> Login</a>
  				<a href = 'javascript:void(0)' onclick = "toggle_visibility('popup-box1')" class = "register" id='signup'> Sign Up </a>
			</div>


		</header> -->


		

<section id = 'main_section'>		
		
<style>
 img{
 	width:100%;
 }
</style>

	<div id = 'myCarousel' class = 'carousel slide'>

		<ol class = 'carousel-indicators'>
			<li data-target = '#myCarousel' data-slide-to = '0' class='active'></li>
			<li data-target = '#myCarousel' data-slide-to = '1' ></li>
			<li data-target = '#myCarousel' data-slide-to = '2' ></li>
			<li data-target = '#myCarousel' data-slide-to = '3' ></li>
			<li data-target = '#myCarousel' data-slide-to = '4' ></li>
		</ol>

		<div class = 'carousel-inner' style='width:100%'>
			
			<div class = 'item active'>	
				<img src='assets/css/images/tipify_image1.jpg' alt = 'Wine' class = 'img-responsive' style = "height:95vh" >
				<div class ='carousel-caption'>
					<h3 class='animated bounceInUp'>Wine</h3>
				</div>
			</div>

			<div class = 'item'>
				<img src='assets/css/images/tipify_image2.jpg' alt = 'Waiter1' class = 'img-responsive' style = "height:95vh">
				<div class ='carousel-caption'>
					<h3 class='animated bounceInUp'>Waiter 1</h3>
				</div>
			</div>

			<div class = 'item'>
				<img src='assets/css/images/tipify_image3.jpg' alt = 'Chef' class = 'img-responsive' style = "height:95vh">
				<div class ='carousel-caption'>
					
					<h3 class='animated bounceInUp'>Chef</h3>
				</div>
			</div>

			<div class = 'item'>
				<img src='assets/css/images/tipify_image4.jpg' alt = 'Waiter2' class = 'img-responsive' style = "height:95vh">
				<div class ='carousel-caption'>
					<h3 class='animated bounceInUp'>Waiter 2</h3>
				</div>
			</div>

			<div class = 'item'>
				<img src='assets/css/images/tipify_image5.jpg' alt = 'Waiter3' class = 'img-responsive' style = "height:95vh">
				<div class ='carousel-caption'>
					<h3 class='animated bounceInUp'>Waiter 3</h3>
				</div>
			</div>

		</div>

		<a class='carousel-control left' href ='#myCarousel' data-slide ='prev'>
			<span class = 'icon-prev'></span>
		</a>
		<a class='carousel-control right' href ='#myCarousel' data-slide ='next'>
			<span class = 'icon-next'></span>
		</a> 

	</div>

</section>


<section>

<style>
	.headerDescription{
		text-align: center;
	}

	hr {
	  margin-top: 20px;
	  margin-bottom: 20px;
	  border: 0;
	  border-top: 2px solid #5CC642;
	}

	.caption{
		text-align: center;
	}

	.learnMore{
		background-color:#5CC642;
	}



</style>

	<div class = 'headerDescription'>
		<h1>How Tipify Works</h1> 
	</div>	

	<hr>

	<div class ='container'>
		<div class='row'>

			<div class='col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-4'>
				<div class ='thumbnail'>
					<img src='http://welovebrisbanebayside.com.au/wp-content/uploads/2014/10/restaurant-clip-art-389.jpg'>
					<div class='caption'>
						<h1>First Thumbnail</h1>
						<p>First Time using a thumbnail</p>
						<a href='#' class= 'learnMore btn btn-success'>Learn More</a>
					</div>
				</div>
			</div>

			<div class='col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-4'>
				<div class ='thumbnail'>
					<img src='http://zeendo.com/info/wp-content/uploads/2013/07/apps-that-save-you-money.jpg	'>
					<div class='caption'>
						<h1>First Thumbnail</h1>
						<p>First Time using a thumbnail</p>
						<a href='#' class= 'learnMore btn btn-success'>Learn More</a>
					</div>
				</div>
			</div>

			<div class='col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-4'>
				<div class ='thumbnail'>
					<img src='http://www.slate.com/content/dam/slate/archive/2002/10/51_021029_tips_main.jpg.CROP.original-original.jpg'>
					<div class='caption'>
						<h1>First Thumbnail</h1>
						<p>First Time using a thumbnail</p>
						<a href='#' class= 'learnMore btn btn-success'>Learn More</a>
					</div>
				</div>
			</div>

		</div>
	</div>


	
</section>
	
		

	<style>
		.searchbackground{
			width:100%;
			background:#5CC642;
			height:500px;
		}

		.searchRestaurant{
			text-align: center;
		}

		.input-group{
			width:350px;
			margin:0 auto;
			position: relative;
  			top: 20%;
  			transform: translateY(-50%);
		}

		.input-group-addon{
			background:#434953;
			border:none;
		}


	</style>

		<section class='searchbackground'>

					<div class= 'searchRestaurant'>
						<h1>ALL AROUND THE WORLD</h1>
						<h3>Available locally, expanding globally</h3>
					</div>

        			<div class="input-group">
            			<input type="text" class="form-control"/> <!-- Use Angular -->
           				<span class="input-group-addon">
                			<i class="fa fa-search"></i>
           				</span>
        			</div>

		</section>


		

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

		
		<style>
			.box{
				color:white;
				text-align: center;	
			}

			.fa{
				color:white;
				margin-right: 8px;
			}

			.icons{
				margin-top:24px;
			}

			ul{
				list-style-type:none;
			}
			ul li a{
				color:white;
			}

			.apple,.google{
				width:175px;
				height:auto;
				margin-top:4%;
				margin-bottom: 5%;
			}
			
			.copyright h3{
				text-align: center;
				color:white;
			}

			.store{
				width:354px;
				margin:0 auto;
			}

			.download{
				border:1px solid white;
				padding: 5px 15px 5px 15px;
				color:white;
				background:transparent;
				font-size:2.5em;
				border-radius:5px;
			    -webkit-transition-property: width;
			    -webkit-transition-duration: .3s;
			    -webkit-transition-timing-function: ease-in-out;
			    transition-property: background;
    			transition-duration: .3s;
    			transition-timing-function: ease-in-out;
    			margin-top:17px;
			}

			.download:hover{
				background:rgba(37, 36, 36, 0.58)
				
			}

			.top{
				text-align: center;
				color:white;
				margin-bottom: 3%;
			}

			.terms{
				text-align: center;
				color:white;
				margin-bottom:4%;
			}

			@media only screen and (min-width:768px){  
				.icons{
					margin-top:-25px;
				}
				.download{
					margin-top:-25px;
				}

				.copyright{
					margin-top:50px;
				}
			}
			
			@media only screen and (min-width:768px) and (max-width: 991px){  
				.icons{
					margin-top:-25px;
				}
				.download{
					margin-top:-25px;
				}

				.copyright{
					margin-top:50px;
				}
			}

			

			@media only screen and (max-width: 768px){	
				.icons{
					width:230px;
					margin:0 auto;
					margin-top:-25px;
				}
				.button{
					width:198px;
					margin:0 auto;
				}
				.box3{
					margin-top:-40px;
				}
				.box3 h4{
					display:inline-block;
					margin-right:10px;
				}
			}	

		</style>



		<footer>
			<div class='container-fluid'>
				<div class="row">
					<div class='box col-xs-6 col-sm-offset-0 col-sm-4 '>
						<h2>Discover</h2>
						<h4>Cities</h4>
						<h4>Sponsorships</h4>
						<h4>Help</h4>			
					</div>
					<div class='box col-xs-6 col-sm-4 '>
						<h2>About Us</h2>
						<h4>Cities</h4>
						<h4>Sponsorships</h4>
						<h4>Help</h4>
						<h4>Help</h4>									
					</div>

					<div class='box box3 col-xs-offset-1 col-xs-10 col-sm-offset-0 col-sm-4'>
						<h2>Blog</h2>
						<h4>Cities</h4>
						<h4>Sponsorships</h4>
						<h4>Help</h4>
						<h4>Help</h4>									
					</div>

					<div class = 'col-sm-offset-1 col-sm-6 col-md-offset-2 col-md-4 icons'>
						<i class="fa fa-facebook fa-4x"></i>
						<i class="fa fa-twitter fa-4x"></i>
						<i class="fa fa-camera fa-4x"></i>
						<i class="fa fa-linkedin-square fa-4x"></i>
					</div>	
				
				
				<div class='col-sm-3 col-md-offset-1 col-md-4 button'>
					<button class='download' type='button'>Download</button>
				</div>
			</div>


				<div class='copyright'>
					<h3>&copy; 2015 Tipify Privacy</h3>
				</div>


					<div class='store'>
						<img class ='apple' src ='assets/css/images/appstore-black.png'>
						<img class ='google' src ='assets/css/images/googleplay.png'>
					</div>

					<div class='terms'>
						<h4> Terms - Privacy </h4>
					</div>
				
				<div class='top'>
					<h3>Back To Top</h3>
				</div>

		</footer>

		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type = 'text/javascript' src = 'assets/js/main.js'></script>
		<script type = 'text/javascript' src = 'assets/prototypes/geolocation.js'></script> <!-- Add this to your main.js file soon -->
		<script type = 'text/javascript' src = 'assets/prototypes/6digit.js'></script> <!-- Add this to your main.js file soon -->
		<script type= 'text/javascript' src='assets/css/wow_js/wow.js'></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
		

		<script>
			 new WOW().init();
		</script>


	</body>
