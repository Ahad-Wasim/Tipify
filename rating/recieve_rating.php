<?php

	if(isset($_POST)){
		$topic = addslashes($_POST['topic']);
		$point = addslashes($_POST['point']);
	} else {
		echo json_encode(['success'=>false, 'error'=>'No data']);
		exit;
	}


	require_once('../includes/mysql_connect.php'); 

	$query = "SELECT * FROM `questions_table` 
				WHERE topic = '$topic' AND 
				(rating_trigger_max>='$point' AND 
				rating_trigger_min <= '$point') AND
				status = 1
				ORDER BY question_order";

	$result = mysqli_query($connection,$query);



	if(mysqli_num_rows($result) > 0){
		$questions=[];
		while($row = mysqli_fetch_assoc($result)){			// were gonna fetch everything and store it into an associative array
			$questions[]=$row;  // this is bascially pushing it like an array to the questions

	  	}
	  	//print_r($questions);
	} 
		
	if(isset($questions))
	{
	echo json_encode(['success' => true, 'data' => $questions]);
	} else { 
	echo json_encode(['success' => false, 'error' => "Their were no questions recieved"]);
	}
?>