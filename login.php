<?php include('server.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <title>SignUp Form</title>
  <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="header1">
  <h3>Login</h3>
</div>

<form method="post" action="login.php">
  <!--display validation error here-->
  <?php include('errors.php');?>
  <div class="input-group">
    <label>Username</label>
    <input type="text" name="username">
  </div>
  
  <div class="input-group">
    <label>Password</label>
    <input type="password" name="password">
  </div>
       <div class="checkbox" style="margin-top: 10px;">
            <input type="checkbox" id="remember-me">
            <label for="remember-me">Remember me</label>
          </div>
     <div class="pass-link" style="margin-top: 10px; color:white;">
        <a href="#">Forgot password?</a></div>
     
  <div class="input-group">
    <button type="submit" name="login" class="btn" style="margin-top: 10px; color:white;">Login</button>
  </div>
  <p>Not yet a member? <a href="signup.php">Sign
  Up</a></p>
</form>
</body>
</html>