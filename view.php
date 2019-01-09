<?php
	if(isset($_POST['btn_search']))
	{
    $search = $_POST['search'];
		// search in all table columns
		// using concat mysql function
		$query = "SELECT * FROM `contact` WHERE CONCAT(`id`, `Contact_Name`, `Contact_Number`) LIKE '%".$search."%'";
		$search_result = filterTable($query);
    
	}
	else {
		$query = "SELECT * FROM `contact`";
		$search_result = filterTable($query);
	}

	// function to connect and execute the query
	function filterTable($query)
	{
		$connect = mysqli_connect("localhost", "root", "", "julie");
		$filter_Result = mysqli_query($connect, $query);
		return $filter_Result;
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
	  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	  <form action="view.php" method="post" class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" name="search">
      <button class="btn btn-outline-danger my-2 my-sm-0" type="submit" name="btn_search">Search</button>
    </form>
    </ul>
  </div>
  
</nav>
<br>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Contact Name</th>
      <th>Contact Number</th>
    </tr>
  </thead>
  <?php while($row = mysqli_fetch_array($search_result)):?>
  <tbody>
    <tr>
		<td><?php echo $row['id'];?></td>
		<td><?php echo $row['Contact_Name'];?></td>
		<td><?php echo $row['Contact_Number'];?></td>
	 <td><div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenu2">
<a class="dropdown-item" href="delete.php?id=<?php echo $row["id"]; ?>" onclick="return confirm('Are you sure?');">Delete</a>
    <button class="dropdown-item" type="button">Edit</button>
  </div>
</div>
</td>
</tr>
  </tbody>
  <?php endwhile;?>
</table>

	</body>
	
	</html>