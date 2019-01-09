<?php
include('log.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: home.php"); // Redirecting To Profile Page
}
?> 

<!DOCTYPE html>
<html>
<head>
<style>
body  {
    background-image: url("nice.jpg");
   
}
</style>
	<title>Sign Up</title>
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel ="stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
			<script src="js/jquery-slim.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
	</head>
	
	<body>
	<br/><br/><br/><br/><br/>
	
	
	
	
<form method="post" action="">
<form action="/connect.php" style="max-width:500px;margin:auto">
  <h2>Login</h2>
  <br/>
  <div class="input-container">
    <i class="fa fa-user icon"></i>
    <input class="input-field" type="text" placeholder="Username" name="Username" required>
  </div>
  <br/>
  <div class="input-container">
    <i class="fa fa-key icon"></i>
    <input class="input-field" type="password" placeholder="Password" name="Password" required>
  </div>
<br/>
  <button type="submit" input class="btn" name="submit">Log in</button>
</form>
</body>
</html>
