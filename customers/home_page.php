<?php
	session_start();
?>


<head>
		<title>Tipify | Customers Page</title>
		<link rel = 'stylesheet' type = 'text/css' href = '../assets/css/main.css'>
		<link rel = 'stylesheet' href = '../assets/css/bootstrap/css/bootstrap.min.css'>
		<link rel = 'stylesheet' type = 'text/css' href = '../assets/css/animate.css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>

<body>

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



<nav class="navbar navbar-inverse navbar-fixed-top ">  <!-- navbar-static-top -->
		<div class = 'container'>
			<div class = 'navbar-header'>
				<button type='button' class = 'navbar-toggle' data-toggle='collapse' data-target='#example'>
					<span class = 'icon-bar'></span>
					<span class = 'icon-bar'></span>
					<span class = 'icon-bar'></span> 
				</button>

				 <a class="navbar-brand" href="www.http://ahadwasim.com/"><img src = '../assets/css/images/Tipify_logo.png'></a>	
			</div>

			<div class = 'collapse navbar-collapse' id='example'>
				<ul class = 'nav navbar-nav navbar-right'>
					<li class = 'bar-color'><a href = '#'>Calculate Tip</a></li>
					<li class = 'bar-color'><a href = '#'>Restaurant</a></li>
					<li class = 'bar-color'><a href = '#'>Employee</a></li>
					<li class = 'bar-color'><a href = '../forms/logout.php'>Logout</a></li>
				</ul>
			</div>

		</div>
</nav>


			
	        	<h1> Welcome <?php echo $_SESSION['user_information']['name']?> </h1>


<




<section>
	<div class = 'customer_profile'>
		<h3>this is my customer profile</h3>

		<div class = 'customer_img'>
			<?php echo "<img src = '../picture_validation/upload/" . $_SESSION['user_information']['image'] . "'" ?> 
			<form action="../picture_validation/picture_validation.php" method="post" enctype="multipart/form-data" id = 'profile_image'>
	    		<input type="file" name="picUpload" id="picUpload">
	    		<input type="submit" value="+" name="submit">
			</form>
		</div>
		




		<small><?php echo $_SESSION['user_information']['name']?></small>  <!-- use javascrip to get this variable -->
		<small><?php echo $_SESSION['user_information']['email']?></small>
		<small><?php echo $_SESSION['user_information']['phone']?></small>
		<small><?php echo $_SESSION['user_information']['age'] ?></small>
	</div>
</section>






<section style = 'background:orange'> <!-- Delete this style -->
<label>Find Restaurant: </label><input type = 'text' name ='restaurant'><br>
<label>Find an Employee: </label><input type = 'text' name ='restaurant'>
</section>

<a href = '../questions.php' >Click Here to Calculate a tip for the restaruant</a>


<section style = 'background:lightblue'> <!-- Delete this style -->
	<h3>Write a review</h3>
	<textarea placeholder= 'write a review'></textarea>
</section>



<section>
	<div class = 'forgot'>
		<p>Forgot to tip waiter box</p>
	</div>
</section>

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
				cursor:pointer;
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
						<img class ='apple' src ='../assets/css/images/appstore-black.png'>
						<img class ='google' src ='../assets/css/images/googleplay.png'>
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























