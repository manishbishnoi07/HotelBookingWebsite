<html>
 <head>
   <title>Signup</title>
<script src="jquery-3.5.0.min.js">  </script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <link rel="stylesheet" type="text/css" href="signup.css"/>
  <script>
   $(document).ready(function(){
		$(".username").keyup(function(){
			var name=$(".username").val();
		$.post("suggestion.php",{
		      suggestion:name	
		},function(data,status){
			$("#h4").html(data);
			
		});
	});
 });
 </script> 
<script>
   $(document).ready(function(){
	$('.button').click(function(e){
			var valid = this.form.checkValidity();
			if(valid){
			var username=$('.username').val();
			var fname=$('.fname').val();
			var lname= $('.lname').val();
			var email= $('.email').val();
			var pno= $('.pno').val();
			var password= $('.password').val();
				e.preventDefault();	
				$.post("db1.php",{username:username ,fname: fname,lname: lname,email: email,pno:pno,password: password},
				function(data,status){
				 if(data=='Success')
                {
					Swal.fire({
								'title': 'Successful',
								'text': 'Successfully saved.',
								'type': 'success'
								})
				}
                else{
					Swal.fire({
								'title': 'Errors',
								'text': 'There were errors while saving the data.',
								'type': 'error'
								})
				}			
				});
			}else{}
	});
 });
 </script> 
 </head>
 <body>
    <div class="text">
        <h1>Sign up</h1>
        <p>Have Account? <a href="login.php">Login</a></p>
    </div> 
	<div class="box">
        <form class="form" action="signup.php" method="post" > 
	        <input type="text" class="username" name="username" placeholder="Username" required /><h4 id="h4" style="color:red;"></h4>
	        <input type="text" class="fname" name="fname" placeholder="First Name" required />
	        <input type="text" class="lname" name="lname" placeholder="Last Name" required />
	        <input type="email" class="email" name="email" placeholder="Email" required />
	        <input type="text" class="pno" name="pno" placeholder="Phone no" required />
	        <input type="password" class="password" name="password" required placeholder="Password" />
	        <input type="submit" name="submit" class="button" value="Sign Up" />
        </form>
	</div>
 </body>
</html>