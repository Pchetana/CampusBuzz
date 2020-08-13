<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "placement_db";

	$email = $_POST['Email'];
	$ppassword= $_POST['Password'];
	
	
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql = "INSERT INTO user_db(Email, Password)
	VALUES ('$email','$ppassword')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}

	$conn->close();
?>