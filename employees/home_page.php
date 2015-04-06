<?php
	session_start();
?>



<head>
		<title>Tipify | Employee Page</title>
		<link rel = 'stylesheet' type = 'text/css' href = '../assets/css/main.css'>
		<link rel = 'stylesheet' href = '../assets/css/bootstrap/css/bootstrap.min.css'>
		<link rel = 'stylesheet' type = 'text/css' href = '../assets/css/animate.css'>
		<link href='http://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
</head>




<header>
	<a href = '../forms/logout.php'>logout</a>
	<h1> Welcome <?php echo $_SESSION['user_information']['name'] ?> </h1>
</header>




<section>
	<div class = 'employee_profile'>
		<h3><?php echo $_SESSION['user_information']['restaurant'] ?></h3>
		<div class = 'img'>IMG</div>
		<small><?php echo $_SESSION['user_information']['name'] ?></small>
		<small><?php echo $_SESSION['user_information']['email'] ?></small>
		<small><?php echo $_SESSION['user_information']['phone'] ?></small>
		<small><?php echo $_SESSION['user_information']['age'] ?></small>
	</div>
</section>





<section>
<div class = 'status'>
		<p>Are you working right now</p>
		<input type = 'radio' name="sex" value="male" checked>Yes
		<input type = 'radio' name="sex" value="female">No<br>
	</div>
	<a href='#' class = 'history'> Click here to see your tip history</a>
</section>



<section>
	<div class='friends'>
		<h3>This Employees Friends</h3>
		<ul>
			<li>friend1</li>
			<li>friend2</li>
			<li>friend3</li>
			<li>friend4</li>
	</div>
</section>






<section>
	<div class = 'employee_reviews'>
	<h3>This Employees Reviews</h3>
		<span>Reveiw 1</span>
		<span>Review 2</span>
		<span>Reveiw 3</span>
	</div>
</section>