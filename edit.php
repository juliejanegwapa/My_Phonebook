<?php session_start(); ?>

<?php
if(!isset($_SESSION['valid'])) {
	header('Location: view.php');
}
?>

<?php

include_once("edit1.php");

if(isset($_POST['update']))
{	
	$id = $_POST['id'];
	
	$Contact_Name = $_POST['Contact_Name'];
	$Contact_Number = $_POST['Contact_Number'];
	
	$result = mysqli_query($db, "Edit contact SET Contact_Name='$Contact_Name', Contact_Number='$Contact_Number' WHERE id=$id");
		
		header("Location: add.php");
}
?>
<?php
$id = $_GET['id'];

$result = mysqli_query($db, "SELECT * FROM contact WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	$Contact_Name = $res['Contact_Name'];
	$Contact_Number = $res['Contact_Number'];
}
?>
