<style>
	#questionbox{
		border:1px solid black;
		display:inline-block;
		background: #FFFED7;
		width:50%;
		height:50%;
	}

	.button_border{
		display:inline-block;
		border:1px solid red;
		border-radius:5px;
	}

	.display_area h1, .display_area h2{
		color:black;
    	text-shadow: -1px 0 white, 0 1px white, 1px 0 white, 0 -1px white;
	}

	.display_area{
		border:1px solid black;
		text-align: center;
		position: relative;
  		top: 50%;
  		transform: translateY(-50%);
	}
	

	#startbutton{
		border:none;
		border-radius:5px;
		border:2px solid white;
		background:red;
		color:white;
		padding:10px 30px;
		font-size: 24px;
	}


	li{
		display:inline-block;
	}


	/*    Food Quality */
	.food_quality{
		background:lavender;
	}
	/*    Food Quality */


	/*    Service */
	.service{
		background:yellow;
	}
	/*    Service   */



	/*    Atmosphere */
	.atmosphere{
		background:lightblue;
	}
	/*    Atmosphere */



	/* For the working stars */
	.rating {
	    overflow: hidden;
	    display: inline-block;
	    font-size: 0;
	    position: relative;
	}
	.rating-input {
	    float: right;
	    width: 16px;
	    height: 16px;
	    padding: 0;
	    margin: 0 0 0 -16px;
	    opacity: 0;
	}
	.rating:hover .rating-star:hover,
	.rating:hover .rating-star:hover ~ .rating-star,
	.rating-input:checked ~ .rating-star {
	    background-position: 0 0;
	}
	.rating-star,
	.rating:hover .rating-star {
	    position: relative;
	    float: right;
	    display: block;
	    width: 16px;
	    height: 16px;
	    background: url('http://kubyshkin.ru/samples/star-rating/star.png') 0 -16px;
	}

	/* For the working stars */










	




</style>

		

<div id = 'questionbox'>
	<div class = 'display_area'>
		<h1>Lets find out how much</h1>
		<h2>This Restaurant Sucked</h2>
		<div class = 'button_border'><input type='submit' id = 'startbutton' value = 'Start'></div>
	</div>
</div>

		















<div class = 'food_quality' id='Food_Quality'>
 
<form>
<h3> Click the submit button to submit the rating </h3>
	<span class="rating">
	        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1"/>
	        <label for="rating-input-1-5" class="rating-star star5" point = '5' topic = 'Food Quality'> </label>
	        
	        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1"/>
	        <label for="rating-input-1-4" class="rating-star star4" point = '4' topic = 'Food Quality'> </label>

	        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1"/>
	        <label for="rating-input-1-3" class="rating-star star3" point = '3' topic = 'Food Quality'> </label>

	        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1"/>
	        <label for="rating-input-1-2" class="rating-star star2" point = '2' topic = 'Food Quality'> </label>

	        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1"/>
	        <label for="rating-input-1-1" class="rating-star star1" point = '1' topic = 'Food Quality'> </label>
	</span><br><br>
	<div class='question_container'></div>
</form><br>



<h3>Food Quality</h3>
 <ul>
 	<li>Rate the food Quality Scale 1-5 ?</li><br>
 	<div class = 'food_star'>
	 	
	</div><br>

 	<h3>If answer is between 1-3</h3>
 		
 		<li>Was the food cold?</li>
 		
 		<input type="radio" name="hot_cold" class = 'radio' value = "The food was not Hot Enough!" checked>Not Hot Enough
 		<input type="radio" name="hot_cold" class = 'radio' value = "No the food was not cold">No it was not cold<br><br>
 		

 		<li>How did the food taste?</li>
 		<input type="radio" name="taste_food" class = 'radio' value="The Food was Great" checked>The food was great!
 		<input type="radio" name="taste_food" class = 'radio' value="The Food was all right">The food was all right.
 		<input type="radio" name="taste_food" class = 'radio' value="I had better food">I had better
 		<input type="radio" name="taste_food" class = 'radio' value="The Food was horrible">The food was horrible<br><br>
 		
 		<li>Did the food taste fresh?</li>
 		<input type="radio" name="fresh_food" class = 'radio' value="Yes the food was fresh" checked>Yes
 		<input type="radio" name="fresh_food" class = 'radio' value="No the food was not fresh">No<br><br>
 		
 		<li>Did you find something inside your food?</li>
 		<input type="radio" name="objectin_food" class = 'radio' value="I found something in my food that was not suppose to be their" checked> Yes!!! Oh the misery
 		<input type="radio" name="objectin_food" class = 'radio' value="I found nothing">Nope the food was clean yo!<br><br>
 		<li>
 			If so what was it<textarea></textarea>
 		</li><br><br>
 		

 		<li>Were many of the dishes out of stock?</li>
 		<input type="radio" name="food_finished" class = 'radio' value="The dishes were out of stock" checked>Many of the dishes were out of stock.
 		<input type="radio" name="food_finished" class = 'radio' value="None of the dishes were out of stock">I had no problem with this.<br><br>
 		
 		<li>Any Other problems you had with the food Quality: <textarea placeholder = 'Please list your reason in here'></textarea></li>
 		

 		<h3>If answer is 4 </h3>
 		<li>What could of been better to make your experience perfect: <textarea placeholder = 'Please list your reason in here'></textarea></li>
 </ul>

 </div> <!-- This closes food quality -->




























<?php

/*
<div class = 'food_quality'>
 
<h3>Food Quality</h3>
 <ul>
 	<li>Rate the food Quality Scale 1-5 ?</li><br>
 	<div class = 'food_star'>
	 	<div class="rating">
				<span class = 'star5' point ='5'>☆</span><span class = 'star4' point ='4'>☆</span><span class = 'star3' point ='3'>☆</span><span class = 'star2' point ='2'>☆</span><span class = 'star1' point ='1'>☆</span>
		</div>
	</div><br>

 	<h3>If answer is between 1-3</h3>
 		
 		<li>Was the food cold?</li>
 		
 		<input type="radio" name="hot_cold" class = 'radio' value = "The food was not Hot Enough!" checked>Not Hot Enough
 		<input type="radio" name="hot_cold" class = 'radio' value = "No the food was not cold">No it was not cold<br><br>
 		

 		<li>How did the food taste?</li>
 		<input type="radio" name="taste_food" class = 'radio' value="The Food was Great" checked>The food was great!
 		<input type="radio" name="taste_food" class = 'radio' value="The Food was all right">The food was all right.
 		<input type="radio" name="taste_food" class = 'radio' value="I had better food">I had better
 		<input type="radio" name="taste_food" class = 'radio' value="The Food was horrible">The food was horrible<br><br>
 		
 		<li>Did the food taste fresh?</li>
 		<input type="radio" name="fresh_food" class = 'radio' value="Yes the food was fresh" checked>Yes
 		<input type="radio" name="fresh_food" class = 'radio' value="No the food was not fresh">No<br><br>
 		
 		<li>Did you find something inside your food?</li>
 		<input type="radio" name="objectin_food" class = 'radio' value="I found something in my food that was not suppose to be their" checked> Yes!!! Oh the misery
 		<input type="radio" name="objectin_food" class = 'radio' value="I found nothing">Nope the food was clean yo!<br><br>
 		<li>
 			If so what was it<textarea></textarea>
 		</li><br><br>
 		

 		<li>Were many of the dishes out of stock?</li>
 		<input type="radio" name="food_finished" class = 'radio' value="The dishes were out of stock" checked>Many of the dishes were out of stock.
 		<input type="radio" name="food_finished" class = 'radio' value="None of the dishes were out of stock">I had no problem with this.<br><br>
 		
 		<li>Any Other problems you had with the food Quality: <textarea placeholder = 'Please list your reason in here'></textarea></li>
 		

 		<h3>If answer is 4 </h3>
 		<li>What could of been better to make your experience perfect: <textarea placeholder = 'Please list your reason in here'></textarea></li>
 </ul>

 </div> <!-- This closes food quality -->

*/
?>









<div class = 'service'>

<h3>Service</h3>
 <ul>
 	<li>Rate the service you have recieved 1-5?</li><br>

 	<div class = 'service_star'>
 		<div class="rating">
				<span class = 'star5' point ='5'>☆</span><span class = 'star4' point ='4'>☆</span><span class = 'star3' point ='3'>☆</span><span class = 'star2' point ='2'>☆</span><span class = 'star1' point ='1'>☆</span>
		</div>
	</div><br>


 	<h3>If answer is between 1-3</h3>
 		<li>How many times did the waiter check up on you?</li>
 	    <input type = 'text' name = 'number' placeholder = 'Waiter checked up on you' checked><br><br>
 		
 		<li>Was the waiters or waitress serveice slow?</li>
 		<form>
 			<input type="radio" name="speed_service" class = 'radio1' value="Yes the Waiters service was slow" checked>Yes
 			<input type="radio" name="speed_service" class = 'radio1' value="No the Waiters service was NOT slow">No<br><br>
 		</form>

 		
 		<li>Did your waiter have a bad attituede?</li>
 		<form> 
 			<input type="radio" name="server_attitude" class = 'radio2' value="YES the waiter had a bad attitude" checked >Yes 
 			<input type="radio" name="server_attitude" class = 'radio2' value="The waiter had somewhat of a bad attitude">Somewhat 
 			<input type="radio" name="server_attitude" class = 'radio2' value="NO the waiter did not have a bad attitude">No<br><br>
 		</form>


 		<li>Did the food take a long time to arrive?</li>
 			<input type="radio" name="server_time" class = 'radio' value="Yes the food did take a long to arrive" checked>Yes
 			<input type="radio" name="server_time" class = 'radio' value="No the food did not take a long time to arrive">No<br><br>
 			<li> How many minutes did it take?</li>
 			<select class="1-100"></select><br><br>


 		<li>Did the staff mess up your order in any way?</li> 
 		<input type="radio" name="server_messup" class = 'radio' value="No they did not mess up my order at all" checked>Nope! It was all good
 		<input type="radio" name="server_messup" class = 'radio' value="They messed up my order here and their">A little bit
 		<input type="radio" name="server_messup" class = 'radio' value="YES they messed up myorder">Yes they screwed up<br><br>
 		
 		<li>Did they pick up the dishes after you were done eating</li>
 		<input type="radio" name="server_dishes" class = 'radio' value="Yep they cleaned by dishes" checked>Yes
 		<input type="radio" name="server_dishes" class = 'radio' value="Screw them they did not pick up my dishes">No<br><br>


 		<li>What else could the restaurant have done to make your service experience better:</li><br>
 		 <textarea placeholder = 'Please list your reason in here'></textarea>
 		

 		<h3>If answer is 4 </h3>
 		<li>What could of been better to make your experience perfect:<textarea placeholder = 'Please list your reason in here'></textarea></li>
 </ul>

 </div>





<div class = 'atmosphere'>

 <h3>Atmosphere</h3>
 <ul>
 	<li>Rate the restuarants atmosphere on a scale of 1-5</li><br>
 	
 	<div class = 'atmosphere_star'>
 		<div class="rating">
				<span class = 'star5' point ='5'>☆</span><span class = 'star4' point ='4'>☆</span><span class = 'star3' point ='3'>☆</span><span class = 'star2' point ='2'>☆</span><span class = 'star1' point ='1'>☆</span>
		</div>
	</div><br>

 	<h3>If answer is between 1-3</h3>
 		<li>Was the restuarant clean?</li>
 		<input type="radio" name="atmosphere_clean" class = 'radio' value="YES the restaurant was soapy clean" checked>Yes
 		<input type="radio" name="atmosphere_clean" class = 'radio' value="The restaurant was a little cleaned">A little
 		<input type="radio" name="atmosphere_clean" class = 'radio' value="No the restaurant was not cleaned at all">No
 		<input type="radio" name="atmosphere_clean" class = 'radio' value="The so and so Restaurant was absolutely filthy">The restaurant was absoloutely filthy.<br><br>

 		<li>Did the restaurant smell in any sort of way?</li>
 		<input type="radio" name="atmosphere_smell" class = 'radio' value="My God the restaurant reeked" checked>Yes it reeked!
 		<input type="radio" name="atmosphere_smell" class = 'radio' value="The restaurant smelled a little">A little they could put an air refreshner in there?
 		<input type="radio" name="atmosphere_smell" class = 'radio' value="Nope the restaurant did not smell at all">The restuarant smelled like nice.<br><br>


 		<li>Did you find yourself getting disrupted a lot?</li>
 		<input type="radio" name="service_disrupted" class = 'radio' value="I hate people I kept on getting disrupted" checked>Yes
 		<input type="radio" name="service_disrupted" class = 'radio' value="I was fine">No<br><br>

 		<li>Did the restaurants theme match the cuisine?</li>
 		<input type="radio" name="service_theme" class = 'radio' value="YES the theme matched the restaurants setting" checked>Yes
 		<input type="radio" name="service_theme" class = 'radio' value="The theme matched the restaurants setting a little">A little
 		<input type="radio" name="service_theme" class = 'radio' value="NO the theme did not match the restaurants setting">No<br><br>

 		<li>Was it tough to find seating?</li>
 		<input type="radio" name="service_seating" class = 'radio' value="I was able to find a seat fast YO" checked>Yes
 		<input type="radio" name="service_seating" class = 'radio' value="Screw this restaurant they made me wait YO">Nope! Seating was not a problem at all.<br>
 		<li>If so how long did you have to wait</li><select class="1-100"></select><br><br>
 		

 		<li>What else could the restaurant have done to make your service experience better:<br> 
 		<textarea placeholder = 'Please list your reason in here'></textarea></li>
 		<h3>If answer is 4 </h3>
 		<li>What else could the restaurant have done to make your service experience perfect:<br> 
 		<textarea placeholder = 'Please list your reason in here'></textarea></li>

 </ul>


</div> <!-- This closes atmosphere -->






<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type = 'text/javascript' src = 'assets/js/main.js'></script>
		<script type = 'text/javascript' src = 'assets/prototypes/geolocation.js'></script> <!-- Add this to your main.js file soon -->
		<script type = 'text/javascript' src = 'assets/prototypes/6digit.js'></script> <!-- Add this to your main.js file soon -->
		<script type= 'text/javascript' src='assets/css/wow_js/wow.js'></script>
		<script src = 'assets/js/infiniteCarousel/jquery.infinitecarousel.js'></script> <!-- Use FlexSlider  this one sucks-->