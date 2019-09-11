<?php
session_start();

$servername = "104.154.78.63";
$username = "root";
$password = "123456";
$dbname = "getcar";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}
else {

	$Email = $_POST["Email"];
	$Password = $_POST["Password"];

	$sql = "select * from staff where username = '$Username' and password='$Password'";
	$result = $conn->query($sql);
	$row=mysqli_fetch_array($result);
	if (password_verify($Password, $row['password'])) {
		$_SESSION['username'] = $row['username'];
		$_SESSION['firstName'] = $row['firstName'];
		$_SESSION['lastName'] = $row['lastName'];
		$_SESSION['usertype'] = 'Staff';

		echo"You are now logged in.";
	} 
	else {
		echo "Error! Something wrong in your username or password!";
	}
}

?>