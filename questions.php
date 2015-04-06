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


	.rating {
	  unicode-bidi: bidi-override;
	  direction: rtl;
	}
	.rating > span {
	  display: inline-block;
	  position: relative;
	  width: 2em;
	}
	.rating > span:hover:before,
	.rating > span:hover ~ span:before {
	   content: "\2605";
	   position: absolute;
	   color:yellow;
	}




</style>

		

<div id = 'questionbox'>
	<div class = 'display_area'>
		<h1>Lets find out how much</h1>
		<h2>This Restaurant Sucked</h2>
		<div class = 'button_border'><input type='submit' id = 'startbutton' value = 'Start'></div>
	</div>
</div>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type = 'text/javascript' src = 'assets/js/main.js'></script>
		<script type = 'text/javascript' src = 'assets/prototypes/geolocation.js'></script> <!-- Add this to your main.js file soon -->
		<script type = 'text/javascript' src = 'assets/prototypes/6digit.js'></script> <!-- Add this to your main.js file soon -->
		<script type= 'text/javascript' src='assets/css/wow_js/wow.js'></script>
		<script src = 'assets/js/infiniteCarousel/jquery.infinitecarousel.js'></script> <!-- Use FlexSlider  this one sucks-->





 
<h3>Food Quality</h3>
 <ul>
 	<li>Rate the food Quality Scale 1-5 ?</li><br>
 	<div class="rating">
		<span id = 'star1'>☆</span><span id = 'star2'>☆</span><span id = 'star3'>☆</span><span id = 'star4'>☆</span><span id = 'star5'>☆</span>
	</div>

 	<h3>If answer is between 1-3</h3>
 		<li>Was the food cold?</li><br>
 		<li>How did the food taste?</li><br>
 		<li>Did the food taste fresh?</li><br>
 		<li>Did you find something inside your food?</li><br>
 		<li>Were many of the dishes out of stock?</li>
 		<li>Other: <textarea placeholder = 'Please list your reason in here'></textarea></li>
 		<h3>If answer is 4 </h3>
 		<li>Other: <textarea placeholder = 'Please list your reason in here'></textarea></li>
 </ul>

<h3>Service</h3>
 <ul>
 	<li>Rate the service you have recieved 1-5?</li><br>

 	<div class="rating">
		<span id = 'star1'>☆</span><span id = 'star2'>☆</span><span id = 'star3'>☆</span><span id = 'star4'>☆</span><span id = 'star5'>☆</span>
	</div>

 	<h3>If answer is between 1-3</h3>
 		<li>How many times did the waiter check up on you?</li><br><input type = 'text' name = 'number' placeholder = 'Waiter checked up on you'>
 		
 		<li>Was the waiters or waitress serveice slow?</li><br>
 		<input type="radio" name="slow_yes" value="yes">Yes
 		<input type="radio" name="attitude_no" value="no">No

 		
 		<li>Did your waiter have a bad attituede?</li><br> 
 		<input type="radio" name="attitude_yes" value="yes">Yes <input type="radio" name="attitude_somewhat" value="attitude_somewhat">Somewhat <input type="radio" name="attitude_no" value="no">No
 		
 		<li>Did the food take a long time to arrive?</li><br>
 		<input type="radio" name="long_yes" value="yes">Yes
 		<input type="radio" name="long_no" value="no">No
 		<li> How many minutes did it take?</li>
 		<select class="1-100"></select>


 		<li>Did the staff mess up your order in any way?</li><br>
 		<input type="radio" name="messup_yes" value="yes">Yes
 		<input type="radio" name="messup_little" value="little">A little bit
 		<input type="radio" name="messup_no" value="yes">Nope! It was all good.
 		
 		<li>Did they pick up the dishes after you were done eating</li><br>
 		<input type="radio" name="dishes_yes" value="yes">Yes
 		<input type="radio" name="dishes_no" value="no">No


 		<li>What else could the restaurant have done to make your experience better:</li><br>
 		 <textarea placeholder = 'Please list your reason in here'></textarea>
 		

 		<h3>If answer is 4 </h3>
 		<li>Other: <textarea placeholder = 'Please list your reason in here'></textarea></li>
 </ul>

 <h3>Atmosphere</h3>
 <ul>
 	<li>Rate the restuarants atmosphere on a scale of 1-5</li><br>
 	<div class="rating">
		<span id = 'star1'>☆</span><span id = 'star2'>☆</span><span id = 'star3'>☆</span><span id = 'star4'>☆</span><span id = 'star5'>☆</span>
	</div>
 	<h3>If answer is between 1-3</h3>
 		<li>Was the restuarant clean?</li><br>
 		<input type="radio" name="clean_yes" value="yes">Yes
 		<input type="radio" name="clean_little" value="a little">A little
 		<input type="radio" name="clean_no" value="no">No
 		<input type="radio" name="clean_filthy" value="filthy">The restaurant was absoloutely filthy.

 		<li>did the restaurant smell in any sort of way?</li><br>
 		<input type="radio" name="smell_yes" value="yes">Yes it reeked!
 		<input type="radio" name="smell_little" value="a little">A little they could put an air refreshner in there?
 		<input type="radio" name="smell_no" value="no">The restuarant smelled like nice.


 		<li>Did you find yourself getting disrupted a lot?</li><br>
 		<input type="radio" name="disrupted_yes" value="disrupted yes">Yes
 		<input type="radio" name="disrupted_no" value="disrupted no">No

 		<li>Did the restaurants theme match the cuisine?</li><br>
 		<input type="radio" name="theme_yes" value="theme yes">Yes
 		<input type="radio" name="theme_little" value="theme a little">A little
 		<input type="radio" name="theme_no" value="theme no">No

 		<li>Was it tough to find seating?</li><br>
 		<input type="radio" name="seating_yes" value="seat yes">Yes
 		<li>If so how long did you have to wait</li>
 		<input type="radio" name="seating_no" value="seating no">Nope! Seating was not a problem at all.

 		<li>Other: <textarea placeholder = 'Please list your reason in here'></textarea></li>
 		<h3>If answer is 4 </h3>
 		<li>Other: <textarea placeholder = 'Please list your reason in here'></textarea></li>

 </ul>


