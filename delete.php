<?php
	require('del.php');
	$id = $_REQUEST['id'];
	$query = "DELETE FROM contact where id = $id";
	$result = mysqli_query($con,$query) or die (mysqli_error());
	header("location: view.php");
?>