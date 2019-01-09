<?php
	session_start();
	$Contact_Name = $_POST['Contact_Name'];
	$Contact_Number = $_POST['Contact_Number'];
	
	if(!empty($Contact_Name) && !empty($Contact_Number)) {
		$host = "localhost";
		$dbUsername = "root";
		$dbPassword = "";
		$dbname = "julie";
		
		// create connection
		$conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
		if (mysqli_connect_error()) {
			die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
		}else {
			$SELECT = "SELECT Contact_Number From contact Where Contact_Number = ? Limit 1";
			$INSERT = "INSERT Into contact (Contact_Name, Contact_Number) values(?, ?)";
			
			//prepare statement
			$stmt = $conn->prepare($SELECT);
			$stmt->bind_param("s", $Contact_Number);
			$stmt->execute();
			$stmt->bind_result($Contact_Number);
			$stmt->store_result();
			$rnum = $stmt->num_rows;
			
			if ($rnum==0) {
				$stmt->close();
				
				$stmt = $conn->prepare($INSERT);
				$stmt->bind_param("ss", $Contact_Name, $Contact_Number);
				$stmt->execute();
				$_SESSION['message'] = "You are now logged in";
				$_SESSION['Contact_Number'] = $Contact_Number;
				header("location: home.php");
			}
			else {
				echo "<script>alert('Someone already register this Contact_Number') </script>";
				
			}
			$stmt->close();
			$conn->close();
		}
	}else {
		echo "All field are required";
		die();
	}

?>