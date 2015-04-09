<?php
	session_start();
	$connection = mysqli_connect('localhost','root', '', 'Tipify_Database'); 

	if(isset($_POST)){
		print_r($_POST);
	}

?>