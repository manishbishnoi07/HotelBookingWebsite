<html>
 <head>
   <title>Login Page</title>
  <link  rel="stylesheet"type="text/css" href="login.css"/> 
 </head>
 <body >
	    <div class="text">
          <h1>Login</h1>
          <p>No Account? <a href="signup.php">Sign up</a></p>
        </div> 
        <div class="box">
            <form class="form" action="validation.php" method="post">
                <input type="text" name="username" class="username" placeholder="Username" required>
                <input type="password" name="password" class="password" placeholder="Password" required>
                <input type="submit" class="button" value="Login">
            </form>
        </div>
 </body>
</html>