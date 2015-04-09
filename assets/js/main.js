$('document').ready(function() {
    $('#geolocation').click(function() {
        console.log('hello');
        $('.pacman').css({ "display": "block"});
    });


		function loginPage(){
			var login_form = $('<form>').addClass('login_form').attr({'action':'forms/login_validation.php', 'method':'post'});

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
     });




	function registerPage(){

		var register_form = $('<form>').addClass('register_form');
     	var register_left = $('<div>').addClass('register_left');
		var firstname = $('<input>').attr({type: 'text',name: 'firstname', placeholder: 'First Name'});
		var lastname =  $('<input>').attr({type: 'text',name: 'lastname', placeholder: 'Last Name'});	
		var email =  $('<input>').attr({type: 'email',placeholder: 'Email'});
		var password =  $('<input>').attr({type: 'password',name: 'password', placeholder: 'Password'});
		var button = $('<input>').attr({type: 'button', value: 'Next Page'}).addClass('nextPage');


		var register_right = $('<div>').addClass('register_right');
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
     }  // registerPage1

     function registerPage2(){
     	



		var registerForm2 = $('<form>').addClass('registerForm2').attr({'action':'forms/register_validation.php', 'method':'post'});
		var restaurant_div = $('<div>').addClass('restaurant_div');
		var restaurant =  $('<input>').attr({type: 'text',name: 'restaurant', placeholder: 'Restaurant'});
		var motto =  $('<input>').attr({type: 'text',name: 'motto', placeholder: 'Motto'});
		var age =  $('<input>').attr({type: 'text',name: 'age', placeholder: 'Your age'});
		var position =  $('<input>').attr({type: 'text',name: 'position', placeholder: 'Position'});
		var sex = $('<input>').attr({type: 'text', name: 'sex', placeholder:'Gender'});
		//var male =  $('<input>').attr({type: 'radio',value: 'male'});  use radios later on
		//var female =  $('<input>').attr({type: 'radio',value: 'female'}); user radios later on
		var submit =  $('<input>').attr({type: 'submit',name: 'submit', value: 'submit'});

		$(registerForm2).append(restaurant_div);
		$(restaurant_div).append(restaurant,'<br>');
		$(restaurant_div).append(motto,'<br>');
		$(restaurant_div).append(age,'<br>');
		$(restaurant_div).append(position,'<br>');
		$(restaurant_div).append(sex,'<br>');
		//$(restaurant_div).append(male,'<br>');
		//$(restaurant_div).append(female,'<br>');
		$(restaurant_div).append(submit);

		$('.whole_form').html(registerForm2);

     }  // registerPage 2




     $('#signup').click(function(){
     	registerPage();
     });				
	
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
		registerPage2();
	});


	// This will be the question funcitonality 


	$('#startbutton').click(function(){
		$('.display_area').fadeOut('slow');
		//$('.display_area').html('hello');
		$('.display_area').fadeIn('slow');
	});

    
				// select 0-100 functionality

    $('body').on('click','.1-100',function(){
    	var select = $(".1-100");				
    	for (i=1;i<=100;i++){
        	select.append($('<option></option>').val(i).html(i));
    	}
	});
    
    			// select 0-100 functionality


    				//TEST
   
    $('.rating-star').click(function(){
    	console.log("rating: ",$(this).attr('point'));
    	console.log("topic: ",$(this).attr('topic'));
    	send_rating($(this).attr('topic'),$(this).attr('point'));
    });





    function send_rating(topic, point){
    	console.log('This star has ' + point + ' points');
    	$.ajax(
    	{
    		url:'rating/recieve_rating.php',
    		data:{
    			topic: topic,
    			point: point,
    		},
    		dataType: 'json',
    		method:'POST',
    		cache:false,
    		success: function(response){
    			console.log(response);
    			display_data(response);
    		} // this closes the success function

    	});// this closes the ajax call

    }// this closes send_rating function

     				//TEST

     	


     	


     	function display_data(response){   // NOTE response is the same ajax response
     		//console.log(response);
     		var response_data = response['data'];
     		console.log("response data",response_data);
     		// var question_options = response_data[0]['question_options'];
     		// question_options = JSON.parse(question_options);
     		// console.log(question_options[0]);

		     		for(var key in response_data){	     			
			     			console.log("this response data: ",response_data[key])
			     			var question = response_data[key]['textbox'];
			     			var question_type = response_data[key]['question_type'];
			     			//console.log(question_type);

			     			var radio_name_attribute = 'questions' +response_data[key]['question_order'];
			     			var question_options = response_data[key]['question_options'];



			     			var question_li = $('<li>',{
			     				class:'question_li'
			     			});
			     			var question_text = $('<span>').html(question);
			     			

			     			//console.log("question options",question_options);


			     			

			     			if(question_type == 'drop-down'){
			     				var select =$('<select>').attr({
			     						class: "1-100"
			     					});
			     				question_li.append(question,select);
			     			}

			     			 else if(question_type == 'free-form'){
			     				var textarea = $("<textarea>").attr({
			     					placeholder: 'What could of been done to give this restaurant a better review',
			     					class: "textarea",
			     					name:'textarea_name'
			     				});
			     				question_li.append(question,textarea);
			     			}
							else
							{
								//radio button
								question_li.append(question_text);
				     			if(question_options.length)
				     			{
					     			var radio_group = $('<span>',{
					     				class:'question_options_span'
					     			});
				     				question_options = JSON.parse(question_options);
									//console.log("rooster crow "+question_options.length);
						     		for(var i = 0; i < question_options.length; i++){
						     			//console.log("I'm in the for loop");
						     			var question_radio = $('<input>',{
						     				type:'radio',
						     				name: radio_name_attribute,
						     				id: radio_name_attribute+'_'+i, // each radio has a unique id
						     				class:'radio',
						     				value: question_options[i],
						     				}); // this closes the question radio attribute
						     			 
						     			 var label = $('<label>',{
						     			 	for: radio_name_attribute+'_'+i   //  this basically allows the label to be clicked as well
						     			 }).html(question_options[i]);

						     			 radio_group.append(question_radio,label);
						     		
						     		} // this closes second for loop

					     			question_li.append(radio_group);	// this holds the whole question
				     			}
			     			}
							
			     			
			     			var target_container = response_data[key]['topic'];         // Food Quality
			     			console.log("target container",target_container);
			     			target_container = '#'+target_container.replace(" ","_");	// #Food_Quality
			     			var container = $(target_container+' .question_container'); //#Food_Quality.question_container
			     			//console.log('going to target ',target_container);
			     			//console.log(target_container);
			     			container.append(question_li);						    // This appends the whole question

					} // this closes the for in loop*/

					var submit_button =  $('<input>').attr({
								     				type:"submit",
								     				value: "NEXT",
								     				name: "NEXT"
								     			 });

							container.append(submit_button);

     	} // This closes the display_data

			

     	

	







	// This Section will be the question funtionality.
     	
	


}); // this closes the main document



     





