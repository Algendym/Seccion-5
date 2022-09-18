<?php 
include("db-config.php");



if (isset($_POST['username']) and isset($_POST['password']) and isset($_POST['email']) and isset($_POST['phonenumber'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$email = $_POST['email'];
	$phone = $_POST['phonenumber'];
	$START_CREATE = "INSERT INTO users (username, password, email, phone_number) VALUES ('$username', '$password', '$email', '$phone')";
	$result = $conn->query($START_CREATE);
	if($result) {
		
		echo "Create Account Successfully  />";
	}
}
?>