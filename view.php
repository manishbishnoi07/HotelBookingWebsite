<?php
session_start();
 if(!isset($_SESSION['username']))
	 header('location:http://localhost/hotel/login.php');
$user=$_SESSION['username'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hotel');
$q="SELECT * FROM rooms where user_id= '$user'";
$result=mysqli_query($con,$q);
$num=mysqli_num_rows($result);
mysqli_close($con);
?>
<html>
  <head>
	<title>View bookings</title>
	<link rel="stylesheet" type="text/css" href="view.css"/>
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
		<?php
			if($num==0)
			{  
		?>
			<h2 style="position:absolute;left:550px;top:130px;font-size:30px;	font-family:Lucida Handwriting;">No Bookings</h2> 
		<?php } 
		else 
		{ ?>
			<h2 style="position:absolute;left:550px;top:130px;font-size:30px;	font-family:Lucida Handwriting;">Booking Details</h2>
			<table>
				<tr>
					<th>User Id</th>
					<th>Type</th>
					<th>Total Rooms</th>
					<th>CheckIn Date</th>
					<th>CheckOut Date</th>
					<th>Room Price</th>
				</tr>
		<?php
			for($i=1;$i<=$num;$i++)
			{
			$row=mysqli_fetch_assoc($result);		
		?>
			<tr>
				<td><?php echo $row['user_id'];?></td>
				<td><?php echo $row['type'];?></td>
				<td><?php echo $row['total_rooms'];?></td>
				<td><?php echo $row['checkin_date'];?></td>
				<td><?php echo $row['checkout_date'];?></td>
				<td><?php echo $row['room_price'];?></td>
		<?php 
			}
		?>
			</tr>
			</table>
		<?php } ?>
  </body>
</html>