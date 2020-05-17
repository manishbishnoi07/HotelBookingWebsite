<?php
$con=mysqli_connect('localhost','root');
mysqli_select_db($con,'hotel');
if(isset($_POST['suggestion'])){
    $name=$_POST['suggestion']; 
	$q="select * from user where username='$name'";
    $res=mysqli_query($con,$q);
    $no=mysqli_num_rows($res);
    if($no==1){
       echo "Username Exists";	
    }	 
}
mysqli_close($con);
?>