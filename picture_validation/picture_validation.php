<?php
	// echo 'hello';
	// exit;
	session_start();
	require_once('../includes/mysql_connect.php');
	$error = [];
	$output = [];


	if(isset($_POST)){
		$target_dir = 'upload/';
		$target_file = $target_dir . $_FILES['picUpload']['name'];  		// upload     +    candy.jpg  
		$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);   		// first we look for the file, // then we look for the extension
		$acceptable_types = ['jpeg','gif','png','jpg'];
		

		if(empty($_FILES['picUpload']['tmp_name'])){
			$error['image'] = 'Please actually upload an image';
		}

		if($_FILES['picUpload']['name'] > 10000000){
			$error['imageSize'] = 'The file is too large';
		}
		if (!in_array(strtolower($imageFileType), $acceptable_types)) {					//if the acceptable type in lower string is not inside the actualfile

			$error['imageType'] = 'We only want images with extensions of .jpeg .gif .png .jpg';
		}	

	if(count($error) == 0){

		if($_SESSION['user_information']['type'] == 'consumer'){
			$table = 'consumers_table';
			$column = 'consumer_id';
			$header_file = 'customers';
			$user_id = $_SESSION['user_information']['consumer_id'];			// if the person who is logged in is an employee
		}

		if($_SESSION['user_information']['type'] == 'employee'){				// if the person who is logged in is an employee
			$table = 'employees_table';
			$column = 'employees_id';
			$header_file = 'employees';
			$user_id = $_SESSION['user_information']['employees_id'];
		}
					
					//-----------   Moving The File
		
		$image = ($_FILES['picUpload']['tmp_name']);						// This is the temporary spot
		$image_name = ($_FILES['picUpload']['name']);						// This is JUST the name  'candy.jpg'
		$move_succeeded = move_uploaded_file($image, $target_file);
		
		if ($move_succeeded === false){
			echo 'The files have failed to move. Please try again';
		}
				    
				    //-----------   Moving The File



		if(!isset($_SESSION['user_information']) && empty($_SESSION['user_information'])){ // if the session is not set and it is empty
			echo "To create a post you have to be logged in. Please log in <br>";
			echo "<a href = '../login/login_form.php'>Click Here to Login</a>";
			exit;
		} // this closes the if statement	

//echo 63;
		$query = "UPDATE $table SET image = '$image_name'   WHERE $column = '$user_id' ";
				//UPDATE consumers_table SET image = 'new_image' WHERE consumer_id ='1'
//echo 68;


	 	$result = mysqli_query($connection,$query);
	 	


	} else {
		// we  have an error somewher in our code
		$output['success'] = 'false';
		$output['message'] = '';
		
		foreach($error as $key => $value) {
			$output['message'] .= $key.':'.$value;  //list all the spots in which errors had occured within our code.
			print_r($output);
			exit;
		} //closes foreach loop
	} // closes else statment

	//header("location: ../$header_file/home_page.php ");
	


} // this closes isset

?>