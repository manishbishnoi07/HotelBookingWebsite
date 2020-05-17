<?php
session_start();
 if(!isset($_SESSION['username']))
	 header('location:http://localhost/hotel/login.php');
$username=$_SESSION['username'];
$checkin=$_POST['checkin'];
$checkout=$_POST['checkout'];
if($checkout<=$checkin)
	header('location:http://localhost/hotel/home.php');
$no=$_POST['trooms'];
$pay;
$diff = abs(strtotime($checkout) - strtotime($checkin)); 
$years   = floor($diff / (365*60*60*24)); 
$months  = floor(($diff - $years * 365*60*60*24) / (30*60*60*24)); 
$days    = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));
$n=$days;
$p1=1000;
$p2=1500;
$p3=2000;
$n1=$n2=$n3=0;
if($no==1){
 $x=$_POST['room1'];
 if($x=="single")
 { $pay=$n*1000; $n1=1;}
 elseif($x=="double")
 {$pay=$n*1500; $n2=1;}
 else
 {$pay=$n*2000; $n3=1;}
}
elseif($no==2){
  $x=$_POST['room1'];
  $y=$_POST['room2'];
  if($x=="single" && $y=="single" )
  {$pay=2*$n*1000; $n1=2;}
 elseif($x=="double" && $y=="double")
 {$pay=2*$n*1500; $n2=2;}
 elseif($x=="family" && $y=="family")
 {$pay=2*$n*2000; $n3=2;}
 elseif(($x=="single" && $y=="double") || ($x=="double" && $y=="single"))
 {$pay=$n*1000+$n*1500; $n1=1; $n2=1;}
 elseif(($x=="single" && $y=="family") || ($x=="family" && $y=="single"))
 {$pay=$n*1000+$n*2000; $n1=1;$n3=1;}
 else
 { $pay=$n*2000+$n*1500;	$n2=1; $n3=1;}
}
else{
	 $x=$_POST['room1'];
     $y=$_POST['room2'];
     $z=$_POST['room3'];
 if($x=="single" && $y=="single" && $z=="single")
{$pay=3*$n*1000;$n1=3;} 
 elseif($x=="double" && $y=="double" && $z=="double")
 {	 $pay=3*$n*1500;$n2=1;}
 elseif($x=="family" && $y=="family" && $z=="family")
 {	 $pay=3*$n*2000;$n3=1;}
 elseif(($x=="single" && $y=="single" && $z=="double") || ($x=="single" && $y=="double" && $z=="single") || ($x=="double" && $y=="single" && $z=="single"))
 {	 $pay=2*$n*1000+$n*1500;$n1=2;$n2=1;}
 elseif(($x=="single" && $y=="single" && $z=="family") || ($x=="single" && $y=="family" && $z=="single") || ($x=="family" && $y=="single" && $z=="single"))
 {	 $pay=2*$n*1000+$n*2000;$n1=2;$n3=1;}
 elseif(($x=="single" && $y=="double" && $z=="double") || ($x=="double" && $y=="single" && $z=="double") || ($x=="double" && $y=="double" && $z=="single"))
 {	 $pay=$n*1000+2*$n*1500;$n1=1;$n2=2;}
 elseif(($x=="single" && $y=="family" && $z=="family") || ($x=="family" && $y=="single" && $z=="family") || ($x=="family" && $y=="family" && $z=="single"))
 {	 $pay=$n*1000+2*$n*2000;$n1=1;$n3=2;}
 elseif(($x=="double" && $y=="double" && $z=="family") || ($x=="double" && $y=="family" && $z=="double") || ($x=="family" && $y=="double" && $z=="double"))
 {	 $pay=2*$n*1500+$n*2000;$n2=2;$n3=1;}
 elseif(($x=="double" && $y=="family" && $z=="family") || ($x=="family" && $y=="family" && $z=="double") || ($x=="family" && $y=="double" && $z=="family"))
 {	 $pay=$n*1500+2*$n*2000;$n2=1;$n3=2;}
 else
 {	 $pay=$n*1000+$n*1500+$n*2000;$n1=1;$n2=1;$n3=1;}	
}
$amount=$pay+(12/100)*$pay;
?>
<html>
  <head>
		<title>Payment</title>
		<script src="jquery-3.5.0.min.js">  </script>
		<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" type="text/css" href="payment.css"/>
		<script>
			$(document).ready(function(){
			var n1="<?php echo "$n1";?>";
			var n2="<?php echo "$n2";?>";
			var n3="<?php echo "$n3";?>";
			var p1="<?php echo "$p1";?>";
			var p2="<?php echo "$p2";?>";
			var p3="<?php echo "$p3";?>";
			var checkin="<?php echo "$checkin";?>";
			var checkout="<?php echo "$checkout";?>";
			$("#btn1").click(function(){
				$.post("db.php",{
				n1:n1,
				n2:n2,
				n3:n3,
				p1:p1,
				p2:p2,
				p3:p3,
				checkin:checkin,
				checkout:checkout
			},function(data,status){
					$("#confirm").html(data);
					$("#btn1").hide();
					});
				});
			});
  </script>
  </head>
  <body>
	<h3 id="confirm"></h3>
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
	<div id="pay">
		<div style="border:1px solid black;">
			<table >
				<tr style="padding:5px;">
					<td>Total Days Stay:</td>
					<td><?php echo " $n";?></td>
				</tr>
				<tr style="padding:5px;">
					<td>Total Rooms:</td>
					<td><?php echo " $no";?></td>
				</tr>
				<tr style="padding:5px;">
					<td>Room Charges:</td>
					<td><?php echo " ₹$pay";?></td>
				</tr>
				<tr style="padding:5px;">
					<td>GST:</td>
					<td><?php echo "12%";?></td>
				</tr>
				<tr style="padding:5px;">
					<td>Payable Amount:</td>
					<td><?php echo " ₹$amount";?></td>
				</tr>
			</table>
		</div>
		<button id="btn1" value="button" style="position:absolute;left:52px; width:50px;height:30px;background-color:#176ceb;color:white;border-radius:5px;">Pay</button>
    </div> 
  </body>
</html>