<!Doctype html>
<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>

<body background="3.jpg">
	
	<ul>
			<li><a href="#Home">LOGO</a></li>
			<li><a href="Flights.html">Flights</a></li>
			<li><a href="">Hotels</a></li>
			<li><a href="TopDeals.html">Top Deals</a></li>
			<div class="floatRight">
			<li><a href="SignUp.php">Sign in</a></li>
			<li><a href="Login.php">Login</a></li></div>
	</ul>
	
	<br>
	
	<div class="align">
	<form>
		<fieldset>
		<legend>Book Your Hotel</legend>
		<lable>Destination:</lable>
		<input type="text" name="Destination" required><br>
		<div class="fifty">
		<lable>Check in:</lable>
		<input type="date" name="Checkin" required>
		</div>
		<div class="fifty">
		<lable>Check out:</lable>
		<input type="date" name="Checkout" required>
		</div>
		<br>
		<lable>No of rooms/guest:</lable>
		<input type="text" name="no of rooms and guest" required><br>
		<input class="button" onclick="location.href = 'Hotel-listing.html';" type="submit" name="Search" value="Search" required><br>	
		</fieldset>
	</form>
</div>
	<h1>Top Hotels</h1>
	<div class="topHotels">
	<a href=""><img src="golden-palm.jpg" width="210px" height="200px" name="Image1"></a>
	<a href=""><img src="oberoi-room.jpg" width="210px" height="200px" name="Image2"></a>
	<a href=""><img src="top-deal-1.jpg" width="210px" height="200px" name="Image3"></a>
	<a href=""><img src="top-deal-2.jpg" width="210px" height="200px" name="Image4"></a>
	<a href=""><img src="top-deal-3.jpg" width="210px" height="200px" name="Image5"></a>
	</div>


<footer>
	<ul class="floatRight">
			<li><a href="#ContactUs">Contact us</a></li>
			<li><a href="#FollowUs">Follow us</a></li>
			
	</ul>
</footer>
</body>
</html>