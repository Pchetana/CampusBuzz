<?php
	require_once('select.php');

		$email = $_POST['Email'];
		$ppassword= $_POST['password'];

		$query = "INSERT INTO user_tbl(Email, password) VALUES('$email','$ppassword')";
		$res = $conn->query($query);
?>