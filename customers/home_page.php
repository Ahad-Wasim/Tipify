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

<header>
	<a href = '../forms/logout.php'> Logout </a>
	<h1> Welcome <?php echo $_SESSION['user_information']['name'] ?> </h1>
</header>



<section>
	<div class = 'customer_profile'>
		<h3>this is my customer profile</h3>

		<div class = 'customer_img'>
			<form action="../picture_validation/picture_validation.php" method="post" enctype="multipart/form-data">
	    		<input type="file" name="picUpload" id="picUpload">
	    		<input type="submit" value="+" name="submit">
			</form>
		</div>
		




		<small><?php echo $_SESSION['user_information']['name'] ?></small>  <!-- use javascrip to get this variable -->
		<small><?php echo $_SESSION['user_information']['email'] ?></small>
		<small><?php echo $_SESSION['user_information']['phone'] ?></small>
		<small><?php echo $_SESSION['user_information']['age'] ?></small>
	</div>
</section>






<section style = 'background:orange'> <!-- Delete this style -->
<label>Find Restaurant: </label><input type = 'text' name ='restaurant'><br>
<label>Find an Employee: </label><input type = 'text' name ='restaurant'>
</section>


<section style = 'background:lightblue'> <!-- Delete this style -->
	<h3>Write a review</h3>
	<textarea placeholder= 'write a review'></textarea>
</section>



<section>
	<div class = 'forgot'>
		<p>Forgot to tip waiter box</p>
	</div>
</section>




























