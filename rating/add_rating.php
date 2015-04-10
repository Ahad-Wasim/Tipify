<?php
	
	/* User javascript to see if the forms are empty or not */

	session_start();
	require_once('../includes/mysql_connect.php');
	
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
 

	} else {
		echo "I am not working";
	}

// I will add the employee id later on
// How to record the main food quality, service, atmosphere rating. the ones betweeen 1-5

	$query = "INSERT INTO `Tipify_Database`.`answers_table` 
		(`consumers_id`, `employees_id`, `created`, `question_id`, `answer`, `rating`) 
		VALUES ('1', '1', '23523523423', '4', 'Yes', '3')";

	$result = mysqli_query($connection,$query);
?>