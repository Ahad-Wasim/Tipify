<?php
	
	/* User javascript to see if the forms are empty or not */

	session_start();
	require_once('../includes/mysql_connect.php');

	
	$error = [];

	if ($_SESSION['user_information']['type'] == 'employee'){
		$person_id_column = 'employees_id';
		$person_id = $_SESSION['user_information']['employees_id'];
	} 

	if ($_SESSION['user_information']['type'] == 'consumer'){
		$person_id_column = 'consumer_id';
		$person_id = $_SESSION['user_information']['consumer_id'];
	} 

	
	if(isset($_POST)){
		print_r($_POST);
		foreach ($_POST as $key => $value) {

			$rating = $value['rating'];   //#
			$question_order = $value['question_number'];   
			$question_id = $value['question_id'];   //#
			$answer = $value['value'];   
			$time = date("d-m-Y",time());   

			 $query = "INSERT INTO `answers_table` (`unique_id`, `consumers_id`,`created`, `question_order`, `answer`, `rating`) 
			 VALUES ('$question_id','$person_id', '$time', '$question_order','$answer','$rating')";

			$result = mysqli_query($connection,$query);
		}
			
	} else {
		echo 'There seems to be an error';
	}



	


	// I will add the employee id later on
// How to record the main food quality, service, atmosphere rating. the ones betweeen 1-5
?>