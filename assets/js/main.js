$('document').ready(function() {
    $('#geolocation').click(function() {
        console.log('hello');
        $('.pacman').css({ "display": "block"});
    });


		function loginPage(){
			var login_form = $('<form>').addClass('login_form');

			var login_left = $('<div>').addClass('login_left');
			var email = $('<input>').attr({type: 'email',name: 'email', placeholder: 'email'});
			 var password = $('<input>').attr({type: 'password',name: 'password', placeholder: 'password'});
			 var submit = $('<input>').attr({type: 'submit',value: 'submit'});

			var login_right = $('<div>').addClass('login_right');
			var need_account = $('<h3>').text("Don\'t have an account");
			var register = $('<h4>').text("Click Here to Register");
			var signup_link = $("<a>").attr({href: '#'}).text('signup');

			$('.hello').append(login_right);
			$(login_right).append(need_account);
			$(login_right).append(register);
			$(login_right).append(signup_link);



			$(login_left).append(email,"<br>");
			$(login_left).append(password,"<br>");
			$(login_left).append(submit,"<br>");
			$(login_form).append(login_left);
			$(login_form).append(login_right);
			

     	$('.whole_form').html(login_form);

     	} //this closes loginPage


     $('#login').click(function(){
     	loginPage();
     })




	function registerPage(){

		var register_form = $('<form>').addClass('register_form');
     	var register_left = $('<div>').addClass('register_left');
		var firstname = $('<input>').attr({type: 'text',name: 'firstname', placeholder: 'First Name'});
		var lastname =  $('<input>').attr({type: 'text',name: 'lastname', placeholder: 'Last Name'});	
		var email =  $('<input>').attr({type: 'email',placeholder: 'Email'});
		var password =  $('<input>').attr({type: 'password',name: 'password', placeholder: 'Password'});
		var button = $('<input>').attr({type: 'button', value: 'Next Page'}).addClass('nextPage');


		var register_right = $('<div>').addClass('register_right')
		var why_am_i_here = $('<h3>').text('All ready have an account');
		var login_direction = $('<h4>').text('Click Here to Login');
		var login_page = $('<a>').attr({href: '#'}).text('Login!');
	

		$(register_form).append(register_left);
		$(register_left).append(firstname,"<br>");
		$(register_left).append(lastname,"<br>");
		$(register_left).append(email,"<br>");
		$(register_left).append(password,"<br>");
		$(register_left).append(button);	



		$(register_form).append(register_right);
		$(register_right).append(why_am_i_here);
		$(register_right).append(login_direction);
		$(register_right).append(login_page);		
		
     	$('.whole_form').html(register_form);
     };

     function registerPage2(){
     	/*
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
	*/

		var registerForm2 = $('<form>').addClass('registerForm2');
		var restaurant =  $('<input>').attr({type: 'text',name: 'restaurant', placeholder: 'Restaurant'});
		var motto =  $('<input>').attr({type: 'text',name: 'motto', placeholder: 'Motto'});
		var age =  $('<input>').attr({type: 'text',name: 'age', placeholder: 'Your age'});
		var position =  $('<input>').attr({type: 'text',name: 'position', placeholder: 'Position'});
		var male =  $('<input>').attr({type: 'radio',value: 'male', checked});
		var female =  $('<input>').attr({type: 'radio',value: 'female', checked});
		var submit =  $('<input>').attr({type: 'text',name: 'position', placeholder: 'Position'});

     }




     $('#signup').click(function(){
     	registerPage();
     })				
	
	/*
	Note i could have done display none or block by grabbing
	the main form on the html page. Hide if sign up clicked 
	and display block on login
	*/



	$('body').on('click', '.login_right a', function(){
		console.log('this is register page');
		registerPage();
	});


	$('body').on('click', '.register_right a', function(){
		console.log('this is login page');
		loginPage();
	});

	
	$('body').on('click', '.nextPage', function(){
		console.log('do some function here');
		registerPage2()
	});
	









    /*
     $('.whole_form').fadeOut(function(){
     	var register_left = $('<div>').addClass('register_left');
		var firstname = $('<input>').attr({type: 'text',name: 'firstname', placeholder: 'First Name'});
		var lastname =  $('<input>').attr({type: 'text',name: 'lastname', placeholder: 'Last Name'});	
		var email =  $('<input>').attr({type: 'email',placeholder: 'Email'});
		var password =  $('<input>').attr({type: 'password',name: 'password', placeholder: 'Password'});			
		

     $('.login_form').append(candy);
     $('.login_form').append(lastname);
 

     	});

     */
     

}); // this closes the main document



