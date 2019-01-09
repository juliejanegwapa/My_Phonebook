<!DOCTYPE html>
<html>
<head>
<style>
body  {
    background-image: url("nice.jpg");
	background-size: cover;
   
}
</style>
	<title>Sign Up</title>
	 <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel="stylesheet" href="css/style.css">
			<link rel ="stylesheet" href = "font-awesome-4.7.0/font-awesome-4.7.0/css/font-awesome.min.css">
			<script src="js/jquery-slim.min.js"></script>
			<script src="js/popper.min.js"></script>
			<script src="js/bootstrap.min.js"></script>
	</head>
	
	<body>
	
<form method="post" action="connect.php">
  <div class="form-row">
	<div class="form-group col-md-6">
      <label>Firstname</label>
      <input type="text" class="form-control" placeholder="Firstname" name="Firstname" required>
    </div>
	<div class="form-group col-md-6">
      <label>Lastname</label>
      <input type="text" class="form-control" placeholder="Lastname" name="Lastname" required>
    </div>
	<div class="form-group col-md-6">
      <label>Username</label>
      <input type="text" class="form-control" placeholder="Username" name="Username" required>
    </div>
    <div class="form-group col-md-6">
      <label>Email</label>
      <input type="email" class="form-control" placeholder="Email" name="Email" required>
    </div>
    <div class="form-group col-md-6">
      <label>Password</label>
      <input type="password" class="form-control" placeholder="Password" name="Password" required>
    </div>
  
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <input class="btn btn-primary" type="submit" value="Sign In"></button>
   <center><h6><font color="white" face="Cooper Std Black">Already have an account? <a href="login.php">Log In</a></font></h6></center>
</form>
	</body>
	
	</html>