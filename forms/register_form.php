<style>
/* Add all these styling to your main.css page */

 .register_form{
 	background:lavender;
 	display:table;
 }

 .register_left{
 	border:1px solid red;
 	display:table-cell;
 }


.register_right{
	border:1px solid green;
	display:table-cell;
}

</style>



<form class = 'register_form'>

	<div class = 'register_left'>
		<input type = 'text' name = 'firstname' placeholder = 'First Name'>
		<input type = 'text' name = 'lastname' placeholder = 'Last Name'>
		<input type = 'email' placeholder='Email'><br>
		<input type = 'password' name ='password' placeholder='password'><br>
		<a href='#'> Next Set of Questions </a><br>
		<small> once next is clicked. Delete everything on left form and then replace it with<br> the rest of the questions</small> <!-- Delete this -->
	</div>


	<div class = 'register_right'>
		<h3> All ready have an account.<h3> 
		<h4>Click Here to Login</h4>
		<a href ='#'>Login!</a>
	</div>


</form>






<form class = 'register_form'>

	<div class = 'register_left'>
		<input type = 'text' name = 'restaurant' placeholder = 'Restaurant'><br>
		<input type = 'motto' name = 'motto' placeholder = 'Motto'><br>
		<input type = 'text' name = 'age' placeholder = 'Age'><br>     <!-- You may want a dropdown but it is not very important. Maybe later parts of the code. but you will need to use javascript and the select tag -->
		<input type = 'text' name = 'position' placeholder = 'Position'><br>
		<input type = 'radio' name="sex" value="male" checked>Male
		<input type = 'radio' name="sex" value="female">Female<br>
		<input type = 'submit' name = 'submit' value = 'submit'><br>
		<small> Once the first part of the form is complete this would then be the second part</small> <!-- Delete this -->

	</div>


	


</form>



<div class = 'applicant'>
</div>









