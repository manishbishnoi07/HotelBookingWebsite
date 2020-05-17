<?php
session_start(); 
 if(!isset($_SESSION['username']))
	 header('location:http://localhost/hotel/login.php');
?>
<html>
  <head>
		<title>Gallery</title>
		<link rel="stylesheet" type="text/css" href="gallery.css"/>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  </head>
  <body>
	<div id="menu">
		<h2 style="text-align:left;position:absolute;top:23px;left:20px;font-family:Bradley Hand ITC;color:white;font-size:25px; ">Raddison Hotel's</h2>
		<ul>
			<li><a href="home.php"><i class="fa fa-home" ></i>Home</a></li>
			<li><a href="view.php"><i class="fa fa-info" ></i>Booking Details</a></li>
			<li><a href="gallery.php"><i class="fa fa-picture-o" ></i>Gallery</a></li>
			<li><a href="about.php"><i class="fa fa-phone "></i>About</a></li>
			<li><a href="logout.php"><i class="fa fa-sign-out" ></i>Log Out</a></li>
			</ul>
   </div>
		<h2 style="position:absolute;left:610px;top:130px;font-size:30px;font-family:Lucida Handwriting;">Gallery</h2>
   <div id="outer">
		<img src="g1.jpeg" class="img" style="float:left;" />
		<img src="g2.jpeg" class="img" style="float:right;"/></br></br>
		<img src="g3.jpeg" class="img" style="float:left;"/>
		<img src="g4.jpeg" class="img" style="float:right;"/></br></br>
		<img src="g5.jpeg" class="img" style="float:left;"/>
		<img src="g6.jpeg" class="img" style="float:right;"/></br></br>
		<img src="g7.jpeg" class="img" style="float:left;"/>
		<img src="g8.jpeg" class="img" style="float:right;"/></br></br>
   </div>
  </body>
</html>