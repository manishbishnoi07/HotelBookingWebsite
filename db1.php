<?php 
if(isset($_POST)){
 $username=$_POST['username'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$email=$_POST['email'];
$pno=$_POST['pno'];
$password=$_POST['password'];
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hotel');
$q="INSERT INTO user(username,first_name,last_name,email,pno,password) values('$username','$fname','$lname','$email','$pno','$password')";
$status=mysqli_query($con,$q);
if($status==1)
	echo "Success";
else
	echo "Failure";
mysqli_close($con);}
else{
	echo "No data";
}
?>