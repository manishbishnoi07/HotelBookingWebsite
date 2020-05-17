<?php
session_start();
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
$p1=$_POST['p1'];
$p2=$_POST['p2'];
$p3=$_POST['p3'];
$n1=$_POST['n1'];
$n2=$_POST['n2'];
$n3=$_POST['n3'];
$username=$_SESSION['username'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hotel');
$q="select * from user where username='$username'";
$result=mysqli_query($con,$q);
$row=mysqli_fetch_array($result);
$fname=$row['first_name'];
$lname=$row['last_name'];
$email=$row['email'];
$pno=$row['pno'];
$q="INSERT INTO guest(username,firstname,lastname,email,pno) values('$username','$fname','$lname','$email','$pno')";
mysqli_query($con,$q);
if($n1!=0){
	$q="INSERT INTO rooms(user_id,type,total_rooms,checkin_date,checkout_date,room_price) values('$username','Single','$n1','$checkin','$checkout','$p1') ";
    $status=mysqli_query($con,$q);
}
if($n2!=0){
	$q="INSERT INTO rooms(user_id,type,total_rooms,checkin_date,checkout_date,room_price) values('$username','Double','$n2','$checkin','$checkout','$p2') ";
    $status=mysqli_query($con,$q);
}
if($n3!=0){
	$q="INSERT INTO rooms(user_id,type,total_rooms,checkin_date,checkout_date,room_price) values('$username','Family','$n3','$checkin','$checkout','$p3') ";
    $status=mysqli_query($con,$q);
}	
if($status==1)
	echo "Rooms Booked";
else
	echo "Rooms not booked";
mysqli_close($con);
?>
