$('document').ready(function() {
    $('#geolocation').click(function() {
        console.log('hello');
        $('.pacman').css({ "display": "block"});
    });

    $('.top').click(function(){
    	topScroll();
    });

    function topScroll() {
            $('html,body').animate({ scrollTop: 0 }, 3000);
    }



/* ------------------------------------------------------------------------------------------------------------------------*/
													//Login Register


	function multipleTabs(){
    var tabsContainer = $('<div>').addClass('container');
    var ul = $('<ul>').addClass('nav nav-pills nav-justified');
    var li1 = $('<li>').addClass('active');
    var li2 = $('<li>');
    var a1 = $('<a>').attr({href:'#Login','data-toggle':'tab'}).html('Login');
    var a2 = $('<a>').attr({href:'#Register','data-toggle':'tab'}).html('Register');
    var hr = $('<hr>');

    var tabConents = $('<div>').addClass('tab-content');
    var tabPaneLogin = $('<div>').attr({class:'tab-pane fade in active', id:'Login'});
    var tabPaneRegister = $('<div>').attr({class:'tab-pane fade', id:'Register'});
    var loginContent = $('<div>').html(createLogin());
    var registerContent = $('<div>').html(createRegister());

    li1.append(a1);
    li2.append(a2);
    ul.append(li1,li2);
    tabPaneLogin.append(loginContent);
    tabPaneRegister.append(registerContent);
    tabConents.append(tabPaneLogin,tabPaneRegister);
   return tabsContainer.append(ul,hr,tabConents);
}


//$('body').append(tabsContainer);


var modal = $('<div>').attr({class: 'modal fade',id: 'user',role: 'dialog','data-toggle': 'modal'});

var modal_dialog = $('<div>').attr({class: 'modal-dialog'});

var modal_content = $('<div>').attr({class: 'modal-content'});

                    
var modal_header = $('<div>').attr({class: 'modal-header'}).html('This is header');
                    
var modal_body = $('<div>').attr({class: 'modal-body'});

var modal_success = multipleTabs();
modal_body.append(modal_success);
                    
var modal_footer = $('<div>').attr({class: 'modal-footer'});
                    
var prev_page = $('<button>').attr({type: 'button',class: 'btn btn-primary back_page','data-dismiss': 'modal'}).html('Go back to main page');
                    
var close_button = $('<button>').attr({type: 'button',class: 'btn btn-default','data-dismiss': 'modal'}).html('Close');
                    
modal_footer.append(prev_page, close_button);
modal_content.append(modal_body, modal_footer);
modal_dialog.append(modal_content);
modal.append(modal_dialog);

$('body').append(modal);












        function createLogin(){  

            var firstDiv = $('<div>').addClass('container');
            var loginHeader = $('<h2>').text('Login');
            firstDiv.append(loginHeader);
            var form = $('<form>').attr({role:'form',action:'forms/login_validation.php', method:'post'});
            
            var formGroup1 = $('<div>').attr({class:'form-group'});

            var emailLabel = $('<label>').attr({for:'email'}).text('Email');
           
            var emailInput = $('<input>').attr({type:'email', class:'form-control', name:'email', id:'email',placeholder:'Enter Email'});
            
            formGroup1.append(emailLabel,emailInput);

            var formGroup2 = $('<div>').attr({class:'form-group'});
            var passwordLabel = $('<label>').attr({for:'password'}).text('Password');
            var passwordInput = $('<input>').attr({type:'password', class:'form-control', name:'password', placeholder:'Enter Password'});
            formGroup2.append(passwordLabel,passwordInput);

            var login_Submit = $('<button>').attr({type:'submit', class:'btn btn-default'}).text('Submit');

            form.append(formGroup1,formGroup2,login_Submit);
            return firstDiv.append(form);   

        }



        function createRegister(){

            
            var choose_container = $('<div>').addClass('container');
            var choose = $('<div>').addClass('row');
            var employeeORcustomer = $('<h1>').addClass('col-md-12').text('Are you a');
            choose.append(employeeORcustomer);

            var clickButton = $('<div>').addClass('row');
            var employee  = $('<button>').attr({type:'button', class:'btn btn-default employee col-sm-6', name:'restaurant'}).text('Employee');
            var customer = $('<button>').attr({type:'button', class:'btn btn-default customer col-sm-6', name:'employee'}).text('Customer');
            clickButton.append(employee,customer);
           
            return choose_container.append(choose,clickButton);
            



            
            var firstDiv = $('<div>').addClass('container');
            var registerHead = $('<h2>').text('Register');
            firstDiv.append(registerHead);
            var form = $('<form>').attr({role:'form'});

            var formGroup1 = $('<div>').attr({class:'form-group one'});
            var firstNameLabel = $('<label>').attr({for:'firstName'}).text('First Name');
            var firstNameInput = $('<input>').attr({type:'text', class:'form-control', name:'firstName', placeholder:'ex: John'});
            formGroup1.append(firstNameLabel,firstNameInput);

            var formGroup2 = $('<div>').attr({class:'form-group one'});
            var lastNameLabel = $('<label>').attr({for:'lastName'}).text('Last Name');
            var lastNameInput = $('<input>').attr({type:'text', class:'form-control', name:'lastName', placeholder:'ex: Doe'});
            formGroup2.append(lastNameLabel,lastNameInput);

            var formGroup3 = $('<div>').attr({class:'form-group one'});
            var emailLabel = $('<label>').attr({for:'email'}).text('Email');
            var emailInput = $('<input>').attr({type:'email', class:'form-control', name:'email', placeholder:'Enter Email'});
            formGroup3.append(emailLabel,emailInput);

            var formGroup4 = $('<div>').attr({class:'form-group one'});
            var passwordLabel = $('<label>').attr({for:'password'}).text('Password');
            var passwordInput = $('<input>').attr({type:'password', class:'form-control', name:'password', placeholder:'Enter Password'});
            formGroup4.append(passwordLabel,passwordInput);

           

            var login_Submit = $('<button>').attr({type:'button', class:'btn btn-default next'}).text('Next');


            $(login_Submit).on('click',function(){
                $('.one,.next').fadeOut('slow');
                setTimeout(function(){   

                    var formGroup5 = $('<div>').attr({class:'form-group two'});
                    var restaurantLabel = $('<label>').attr({for:'restaurant'}).text('Restaurant');
                    var restaurantInput = $('<input>').attr({type:'text', class:'form-control', name:'restaurant', placeholder:'Enter Which Restaurant Your work At'});
                    formGroup5.append(passwordLabel,passwordInput);

                    var formGroup6 = $('<div>').attr({class:'form-group two'});
                    var mottoLabel = $('<label>').attr({for:'motto'}).text('Motto');
                    var mottoInput = $('<input>').attr({type:'text', class:'form-control', name:'motto', placeholder:'Give Yourself a Motto'});
                    formGroup6.append(mottoLabel,mottoInput);

                    var formGroup7 = $('<div>').attr({class:'form-group two'});
                    var ageLabel = $('<label>').attr({for:'age'}).text('Age');
                    var ageInput = $('<input>').attr({type:'text', class:'form-control', name:'age', placeholder:'Enter Your age'});
                    formGroup7.append(ageLabel,ageInput);

                    var formGroup8 = $('<div>').attr({class:'form-group two'});
                    var positionLabel = $('<label>').attr({for:'position'}).text('Position');
                    var positionInput = $('<input>').attr({type:'text', class:'form-control', name:'position', placeholder:'Whats your current Position at the restaurant'});
                    formGroup8.append(positionLabel,positionInput);

                    var genderContainer = $('<div>').addClass('container');
                    var genderHeader = $('<h2>').html('Gender');
                    var genderText = $('<p>').html('Please Select Your Gender Below');
                    genderContainer.append(genderHeader,genderText);

                    var sex = ['Male','Female','Other'];

                    for(var i =0;i<=sex.length-1;i++){
                        var divRadio = $('<div>').addClass('radio');
                        var radioLabel = $('<label>');
                        var radioInput = $('<input>').attr({type:'radio', name:'optradio'});
                        var span = $('<span>').text(sex[i]);
                        radioLabel.append(radioInput,span);
                        divRadio.append(radioLabel);
                        genderContainer.append(divRadio);
                    }         
                    
                    form.append(formGroup5,formGroup6,formGroup7,formGroup8,genderContainer);
                },600);

            }); //closes onclick

            form.append(formGroup1,formGroup2,formGroup3,formGroup4,login_Submit);
            firstDiv.append(form); 

        }// closes create Register
        											//Login Register
  /* ------------------------------------------------------------------------------------------------------------------------*/          














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
    			display_data(response, point);
    		
    		} // this closes the success function
    	});// this closes the ajax call
    }// this closes send_rating function

     				//TEST

     	


     	


     	function display_data(response, point){   // NOTE response is the same ajax response
     		//console.log(response);
     		var response_data = response['data'];
     		console.log("response data",response_data);

		     		for(var key in response_data){	     			
			     			//console.log("this response data: ",response_data[key])
			     			var question = response_data[key]['textbox'];
			     			var question_type = response_data[key]['question_type'];
			     			var question_id = response_data[key]['id'];
			     			//console.log(question_id);

			     			var radio_name_attribute = response_data[key]['question_order'];
			     			var question_options = response_data[key]['question_options'];



			     			var question_li = $('<li>',{
			     				class:'question_li',						//<li><a>some text</a></li>  were grabbing specifically the li
			     				id: question_id,
			     				question_id: question_id,					// why do i need this
			     				rating: point,								// this holds the star rating for that field
			     			});

			     			var question_text = $('<span>').html(question);  // span will hold the main question

			     			//console.log("question options",question_options);
		

			     			if(question_type == 'drop-down'){
			     				var select = $('<select>').attr({
			     						class: "1-100"
			     					});
			     				question_li.append(question,select);
			     			}

			     			 else if(question_type == 'free-form'){
			     				var textarea = $("<textarea>").attr({
			     					placeholder: 'What could of been done to give this restaurant a better review',
			     					class: "textarea",
			     					name: radio_name_attribute
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
								     				type:"button",
								     				value: "NEXT",
								     				name: "NEXT",
								     				class: 'next_button'
								     			 });

							container.append(submit_button);	


							/* this has to be inside the function because the submit button is a local scoper*/
							$('body').on('click', '.next_button', function(){
								sendquestions(this);	
							});						


     	} // This closes the display_data


     				function sendquestions(target){
     					console.log('hello',target);
     					window.mytarget = target;
     					var form = $(target).parents('form');
     					var form_elements = $(form).find('input:checked, textarea, select');
     					var form_data = {};
     					form_elements.each(function(){		//LOOPING THROUGH ALL THE OBJECTS
     						console.log(this);
     						var field = $(this);			// this makes our life easier!!!

     						var question_id = $(this).parents('.question_li').attr('question_id'); // the attr('question_id')  === a number   // every question_id is unique in the loop
     						var question_rating = $(this).parents('.question_li').attr('rating');
     						var this_data = {id:field.attr('id'), name:field.attr('name'), question_id:question_id, value:field.val(), rating: question_rating};
     						form_data[question_id]=this_data;
     					
     					});   //closes the each loop



     					console.log('form data: ',form_data );
     	
						$.ajax({
							url:'rating/add_rating.php',
							data: form_data,
							method: 'POST',
							success: function(){
								console.log('success');
							}

						});
     				}






	// This Section will be the question funtionality.
     	
	


}); // this closes the main document



     





