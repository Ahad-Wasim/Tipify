
<style>
/* Move these css to the main.css page */
.employee_profile{
	background: lavender;
}

.img{
	border:1px solid black;
	height:100px;
	width:100px;
}





.status{
	background: green;
	display:inline-block;
}

.history{
	background: red;
}
.employee_reviews{
	background:lavender;
}
.friends{
	background:yellow;
}
</style>


<header>
	<a href = '#'>logout</a>
	<h1> Welcome [Employees Name] </h1>
</header>




<section>
	<div class = 'employee_profile'>
		<h3>this is my restaurant profile</h3>
		<div class = 'img'>IMG</div>
		<small>Ahad Wasim</small>
		<small>ahadwasim@yahoo.com</small>
		<small>415-238-7333</small>
		<small>19</small>
	</div>
</section>





<section>
<div class = 'status'>
		<p>Are you working right now</p>
		<input type = 'radio' name="sex" value="male" checked>Yes
		<input type = 'radio' name="sex" value="female">No<br>
	</div>
	<a href='#' class = 'history'> Click here to see your tip history</a>
</section>



<section>
	<div class='friends'>
		<h3>This Employees Friends</h3>
		<ul>
			<li>friend1</li>
			<li>friend2</li>
			<li>friend3</li>
			<li>friend4</li>
	</div>
</section>






<section>
	<div class = 'employee_reviews'>
	<h3>This Employees Reviews</h3>
		<span>Reveiw 1</span>
		<span>Review 2</span>
		<span>Reveiw 3</span>
	</div>
</section>