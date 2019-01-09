<?php
	include('session.php');
	
	if(!isset($_SESSION['login_user'])) {
		header("location: login.php");
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
	<title>Phonebook</title>
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel ="stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
			<script src="js/jquery-slim.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
	</head>
	
	<body>
	
	
	
<nav class="navbar navbar-expand-lg navbar-dark bg-info">
<a class="navbar-brand" href="#"><img src="picture/logo.PNG" width="60" height="60"><font color="white" font size="5" font face="David">PHONEBOOK</font></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  
  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link fa fa-home" href="Home.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link fa fa-plus" href="Add.php">Add Contact <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active">
        <a class="nav-link fa fa-eye" href="View.php">View Contact <span class="sr-only">(current)</span></a>
      </li>
	  	  <li class="nav-item active">
        <a class="nav-link fa fa-arrow-down" href="logout.php">Log Out<span class="sr-only">(current)</span></a>
      </li>
    </ul>
  </div>
  
</nav>


<br><br><br>

	</body>
	
	</html>