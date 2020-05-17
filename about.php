<?php
session_start(); 
 if(!isset($_SESSION['username']))
	 header('location:http://localhost/hotel/login.php');
?>
<html>
	<head>
		<title>About</title>
		<link rel="stylesheet" type="text/css" href="about.css"/>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
	</head>
	<body >
		<div id="menu">
			<h2 style="text-align:left;position:absolute;top:23px;left:20px;font-family:Bradley Hand ITC;color:white;font-size:25px; ">Raddison Hotel's</h2>
			<ul>
				<li ><a href="home.php"><i class="fa fa-home" ></i>Home</a></li>
				<li><a href="view.php"><i class="fa fa-info" ></i>Booking Details</a></li>
				<li><a href="gallery.php"><i class="fa fa-picture-o" ></i>Gallery</a></li>
				<li><a href="about.php"><i class="fa fa-phone "></i>About</a></li>
				<li><a href="logout.php"><i class="fa fa-sign-out" ></i>Log Out</a></li>
			</ul>
		</div>
		<div id="about-us" style="border-style: groove; font-family:Century Gothic;" >
			</br><h3 style="margin-left:10px; ">About our hotel</h3></br>
				<div id="about">
					<p>This ritzy hotel is 2 blocks from lively Connaught Place, a 7-minute walk from the Shivaji Bridge railway station and 1.6 km from Jantar Mantar, an 18th-century astronomy complex.</p></br>
					<p>Refined rooms have flat-screen TVs and DVD players, plus minibars and desks. Upgraded rooms add iPod docks, free Wi-Fi and access to an exclusive lounge. Suites have living areas; some include original art, in-room bars and butler service. Room service is available.</p></br>
					<p>A free breakfast buffet is served in a 24-hour restaurant. There are 5 other eateries, plus a bar and a funky nightclub. Other amenities include a spa, a yoga studio, a fitness centre and an outdoor pool.</p></br>
					<p><strong>Check-in time: </strong>8:00 AM</p>
					<p><strong>Check-out time:</strong>12:00 PM</p>
				</div>
				<div id="address">
					<p style="color:grey; margin-bottom:25px;""><strong>Address & contact information </strong></p>
					<i class="fa fa-map-marker fa-lg" style="margin-right:8px;"></i><div style="position:relative; bottom:24px; left:25px; margin-bottom:-7px;">Fire Brigade Ln, Fire Brigade Lane,<br>Barakhamba, New Delhi, Delhi 110001</div>
					<i class="fa fa-phone fa-lg"  style="margin-right:8px;"></i>011 444 7777
				</div>
		</div>
		<div id="price" style="border-style: groove; font-family:Century Gothic;" >
			<h3><center>Single Room</center></h3>
			<p style="margin-left:8px;">Room Price : ₹1,000/day</p>
			<p style="margin-left:8px;">Guest Accomodation : Only 1</p>
			</br>
			<h3><center>Double Room</center></h3>
			<p style="margin-left:8px;">Room Price : ₹1,500/day</p>
			<p style="margin-left:8px;">Guest Accomodation : Upto 2</p>
			</br>
			<h3><center>Family Room</center></h3>
			<p style="margin-left:8px;">Room Price : ₹2,000/day</p>
			<p style="margin-left:8px;">Guest Accomodation : Upto 4</p>
		</div>
	</body>
</html>