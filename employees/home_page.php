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


		<div class = 'customer_img'>
			<?php echo "<img src = '../picture_validation/upload/" . $_SESSION['user_information']['image'] . "'" ?> 
			<form action="../picture_validation/picture_validation.php" method="post" enctype="multipart/form-data" id = 'profile_image'>
	    		<input type="file" name="picUpload" id="picUpload">
	    		<input type="submit" value="+" name="submit">
			</form>
		</div>

		
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

<a href = '../questions.php' >Click Here to Calculate a tip for the restaruant</a>

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