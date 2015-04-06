<?php
/*
Im going to validate some stuff here. 
Connect to the database to see if we have a match of that specific person.
Then connect to the page if that person is a match.
if a person is an employeee it should be a different page.
if a person in a customer it should be a different page.
*/
?>



<?php
session_start();

$connection = mysqli_connect('localhost','root','','Tipify_Database');  // i could use shortcut but I don't want to many forms.

$error = [];


if (isset($_POST['email']) && isset($_POST['password'])) {	 		//if we are retrieving things from a username and password
    if (!empty($_POST['email']) && !empty($_POST['password'])) {	// if username and password is not empty
        //echo 'it is set ' . $_POST['email'] . ' ' . $_POST['password'];		// we are set
        $email = $_POST['email'];										// we then declare the username variables
        $password = $_POST['password'];									// when then declare a password but it is encrypted
    } 
    else if (empty($_POST['email']) && empty($_POST['password'])) {			// else if they are BOTH empty
        $error['both'] = "Please fill in your email input field and your password input field";	// these will be blank
    } 
    else if (empty($_POST['email'])) {			// if just username is empty
        $error['email'] = "Please fill in your email";		// prints into error array
    } 
    else {
        $error['password'] = "please fill in your password";   		// error array
    }
} 
else {
    $error['connection'] = 'We have failed to recieve a post connection';		// error array  
}
	//echo $error; // if we have an error


$query = "SELECT * FROM consumers_table WHERE email='$email' AND password = '$password'";
$query2 = "SELECT * FROM employees_table WHERE email='$email' AND password = '$password'";	

$result = mysqli_query($connection, $query);
$result2 = mysqli_query($connection, $query2);



if (mysqli_num_rows($result) > 0) {					// if the results returned is greater than zero
    $user_info = mysqli_fetch_assoc($result);		// ACTUALLY GRAB THE RESULTS and then converts it into an ASSOCIATIVE ARRAY and then store them inside $user_info
    $_SESSION['user_information'] = $user_info;		//	THIS IS WHAT IT LOOKS LIKE  look below
    print_r($_SESSION['user_information']);			//Array ( [username] => awasim [password] => 3222663e2753b84bbf5368fd9cd80434d8fc79a1 [name] => Ahad Wasim [email] => ahadwasim@yahoo.com [user_id] => 1 )
    if($_SESSION['user_information']['type'] === 'consumer'){	
    header('Location: ../customers/home_page.php');				    // redirect to the consumer main page
   } 
}    else if(mysqli_num_rows($result2) > 0) {
     $user_info = mysqli_fetch_assoc($result2);		
     $_SESSION['user_information'] = $user_info;		
     
     if($_SESSION['user_information']['type'] === 'employee'){		
     header('Location: ../employees/home_page.php');				// else the person is an employee
   } 
   	echo "sorry incorrect username or password";
   
}






?>