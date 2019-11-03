<?php

$servername = "localhost";
$username = "root";
$password = "getcar123456";
$dbname = "getcar";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}
else {

	$Email = $_POST["Email"];
	$Password = $_POST["Password"];

	$sql = "select * from customers where email='$Email'";
	$result = $conn->query($sql);
	$row=mysqli_fetch_array($result);

	if (password_verify($Password, $row['password'])) {
		$_SESSION['customerID'] = $row['customerID'];
		$_SESSION['email'] = $row['email'];
		$_SESSION['firstName'] = $row['firstName'];
		$_SESSION['lastName'] = $row['lastName'];
		$_SESSION['usertype'] = 'Customer';

		echo "You are now logged in.";
		echo "<p>You may <a href=".base_url('book').">make a booking</a>, 
		<a href=".base_url('cust_rental').">view your bookings</a> 
		or <a href=".base_url('profile').">view your profile</a>.</p>";
	} 
	else {
		echo "Error! Something wrong in your username or password!";
		echo "Go back to <a href=".base_url('cust_login').">login page</a>";
	}
}

?>