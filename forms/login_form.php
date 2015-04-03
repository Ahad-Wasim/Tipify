<style>
/* Add all these styling to your main.css page */
 .login_form{
 	background:lavender;
 	display:table;
 }

 .login_left{
 	border:1px solid red;					
 	display:table-cell;
 }


.login_right{
	border:1px solid green;
	display:table-cell;
}

</style>





<form class = 'login_form'>

<div class = 'login_left'>
	<input type = 'email' placeholder='Email'><br>
	<input type = 'password' name ='password' placeholder='password'><br>
	<input type = 'submit' value='submit'>
</div>


<div class = 'login_right'>
	<h3> Don't have an account.<h3> 
	<h4>Click Here to Register</h4>
	<a href ='#'>Sign Up!</a>
</div>


</form>