<?php 
session_start();
 if(!isset($_SESSION['username']))
	 header('location:http://localhost/hotel/login.php');
?>
<html>
 <head>
  <title>Book Rooms</title>
  <link rel="stylesheet" type="text/css" href="home.css"/>
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <script src="jquery-3.5.0.min.js"> </script>
  <script> 
	 function check(){
     var x=document.getElementById('text1');
	 var y=x.value;
	 if(y==1)
	   {
	   document.getElementById('show1').style.visibility='visible';
	   document.getElementById('show2').style.visibility='hidden';
	   document.getElementById('show3').style.visibility='hidden'; 
	    $("#room2").prop('required',false);
	   $("#room3").prop('required',false);
	 }
	 else if(y==2)
	   {
	   document.getElementById('show1').style.visibility='visible';
	   document.getElementById('show2').style.visibility='visible';
	   document.getElementById('show3').style.visibility='hidden';
	   $("#room2").prop('required',true);
	   $("#room3").prop('required',false);
	 }
	 else if(y==3){
	   document.getElementById('show1').style.visibility='visible';
	   document.getElementById('show2').style.visibility='visible';
	   document.getElementById('show3').style.visibility='visible';
	   $("#room2").prop('required',true);
	   $("#room3").prop('required',true);
	 }
	 else if(y<1)
	  alert("Invalid rooms");
	 else{
	   alert("Can't book more than 3 rooms");}
	 }
  </script>
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
	<div class="a">
		<h1 >A Luxury Stay</h1>
	</div>
	<div class="book">
		<h2 id="h2">Book Rooms</h2>
		<form  action="payment.php" method="post">
			<div id="form1">
				</br><label  for="checkin"> Check In Date:</label></br></br>
				<input  type="date" name="checkin" id="checkin" required /></br></br> 
			</div>
			<div id="form2">
				</br><label for="checkout">Check Out Date:</label></br></br>
				<input type="date" name="checkout" id="checkout" required /></br></br> 
			</div>
			<div id="form3">
				</br><label  for="text1"> Rooms:</label><input type="number" id="text1"  name="trooms"/></br></br>
				<button type="button" onclick="check();">Add</button></br></br>
			</div>
			<div id="form4">
				<div id="show1" >
					<label  for="room1"> Room1:</label>
					<select name="room1" id="room1"  required>
						<option value="">Choose Room</option>
						<option value="single">Single Room</option>
						<option value="double">Double Room</option>
						<option value="family">Family Room</option>
					</select>
				</div>
				</br>
				<div id="show2" style="visibility:hidden;">
					<label  for="room2"> Room2:</label>
					<select name="room2" id="room2" >
						<option value="">Choose Room</option>
						<option value="single">Single Room</option>
						<option value="double">Double Room</option>
						<option value="family">Family Room</option>
					</select>
				</div>
				</br>
				<div id="show3" style="visibility:hidden;">
					<label  for="room3"> Room3:</label>	
					<select name="room3" id="room3">
						<option value="">Choose Room</option>
						<option  value="single">Single Room</option>
						<option  value="double">Double Room</option>
						<option  value="family">Family Room</option>
					</select>
				</div>
			</div>
			<input type="submit" value="Book" id="form5">
		</form>
	</div>
  </body>
</html>
