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

a

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
	
	.question_li{
		display: block; /* We displayed this block specifically for the questions */
	}

	.textarea{
		display:block;
	}

	/* For the working stars */

</style>




		
				<!-- First Box -->
<div id = 'questionbox'>
	<div class = 'display_area'>
		<h1>Lets find out how much</h1>
		<h2>This Restaurant Sucked</h2>
		<div class = 'button_border'><input type='submit' id = 'startbutton' value = 'Start'></div>
	</div>
</div>
				<!-- First Box -->
		



											<!-- Food Quality -->

	<div class = 'food_quality' id='Food_Quality'>
 
		<form action='rating/add_rating.php' method = 'POST'>  <!-- Submitting Form throught PHP rather than ajax because it easier and then more dynamic -->
		<h3>Click the stars to rate the restaurant</h3>
			<span class="rating">
					<!-- Maybe Delete the name in the stars -->
			        <input type="radio" class="rating-input" id="rating-input-1-5" aname="rating-input-1"/>
			        <label for="rating-input-1-5" class="rating-star star5" point = '5' topic = 'Food Quality'> </label>
			        
			        <input type="radio" class="rating-input" id="rating-input-1-4" aname="rating-input-1"/>
			        <label for="rating-input-1-4" class="rating-star star4" point = '4' topic = 'Food Quality'> </label>

			        <input type="radio" class="rating-input" id="rating-input-1-3" aname="rating-input-1"/>
			        <label for="rating-input-1-3" class="rating-star star3" point = '3' topic = 'Food Quality'> </label>

			        <input type="radio" class="rating-input" id="rating-input-1-2" aname="rating-input-1"/>
			        <label for="rating-input-1-2" class="rating-star star2" point = '2' topic = 'Food Quality'> </label>

			        <input type="radio" class="rating-input" id="rating-input-1-1" aname="rating-input-1"/>
			        <label for="rating-input-1-1" class="rating-star star1" point = '1' topic = 'Food Quality'> </label>
			</span><br><br>
			<div class='question_container'></div>
		</form><br>

	</div> <!-- This is food Quality -->


											<!-- Food Quality -->





								<!-- This is the Service Section -->

	<div class = 'service' id = 'service'>

		<form action = 'rating/add_rating.php' method = 'POST'>     <!-- Submitting Form throught PHP rather than ajax because it easier and then more dynamic -->
		<h3>Click the stars to rate the restaurant</h3>
			<span class="rating">

			        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1"/>
			        <label for="rating-input-1-5" class="rating-star star5" point = '5' topic = 'Service'> </label>
			        
			        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1"/>
			        <label for="rating-input-1-4" class="rating-star star4" point = '4' topic = 'Service'> </label>

			        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1"/>
			        <label for="rating-input-1-3" class="rating-star star3" point = '3' topic = 'Service'> </label>

			        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1"/>
			        <label for="rating-input-1-2" class="rating-star star2" point = '2' topic = 'Service'> </label>

			        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1"/>
			        <label for="rating-input-1-1" class="rating-star star1" point = '1' topic = 'Service'> </label>
			</span><br><br>
			<div class='question_container'></div>
		</form><br>

	</div>   <!-- This closes service div -->

								  <!-- This is the Service Section -->



 									<!-- This is the Atmosphere -->

		<div class = 'atmosphere' id = 'atmosphere'>

			<form action = 'rating/add_rating.php' method = 'POST'> 	<!-- Submitting Form throught PHP rather than ajax because it easier and then more dynamic -->
			<h3>Click the stars to rate the restaurant</h3>
				<span class="rating">

				        <input type="radio" class="rating-input" id="rating-input-1-5" name="rating-input-1"/>
				        <label for="rating-input-1-5" class="rating-star star5" point = '5' topic = 'Atmosphere'> </label>
				        
				        <input type="radio" class="rating-input" id="rating-input-1-4" name="rating-input-1"/>
				        <label for="rating-input-1-4" class="rating-star star4" point = '4' topic = 'Atmosphere'> </label>

				        <input type="radio" class="rating-input" id="rating-input-1-3" name="rating-input-1"/>
				        <label for="rating-input-1-3" class="rating-star star3" point = '3' topic = 'Atmosphere'> </label>

				        <input type="radio" class="rating-input" id="rating-input-1-2" name="rating-input-1"/>
				        <label for="rating-input-1-2" class="rating-star star2" point = '2' topic = 'Atmosphere'> </label>

				        <input type="radio" class="rating-input" id="rating-input-1-1" name="rating-input-1"/>
				        <label for="rating-input-1-1" class="rating-star star1" point = '1' topic = 'Atmosphere'> </label>
				</span><br><br>
				<div class='question_container'></div>
			</form><br>

		</div> <!-- This Closes Atmosphere -->

										<!-- This is the Atmosphere -->




		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
		<script type = 'text/javascript' src = 'assets/js/main.js'></script>
		<script type = 'text/javascript' src = 'assets/prototypes/geolocation.js'></script> <!-- Add this to your main.js file soon -->
		<script type = 'text/javascript' src = 'assets/prototypes/6digit.js'></script> <!-- Add this to your main.js file soon -->
		<script type= 'text/javascript' src='assets/css/wow_js/wow.js'></script>
		<script src = 'assets/js/infiniteCarousel/jquery.infinitecarousel.js'></script> <!-- Use FlexSlider  this one sucks-->




