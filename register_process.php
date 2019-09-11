<?php
$servername = "104.154.78.63";
$username = "root";
$password = "123456";
$dbname = "getcar";

$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}
else {
	$FirstName = $_POST['FirstName'];
	$LastName = $_POST['LastName'];
	$Mobile = $_POST['Mobile'];
	$Email = $_POST['Email'];
	$UserType = "Customer";
	$Password = $_POST['Password'];
	$RePassword = $_POST['RePassword'];

	if($Password != $RePassword) {
		echo"Password does not match";
	}
		
	else {
		//hash the password
		$PasswordHash = hash($Password, PASSWORD_DEFAULT);
		
		//connect to database and see if email exists
		$sql="select * from customers where email = '$Email'";
		$result = $conn->query($sql);
		$row=mysqli_fetch_array($result);

		if($row) {
		echo "Email already exists";
		}

		else {

			$query = "insert into customers(email, firstName, lastName, mobile, userType, password) 
				VALUES('$Email', '$FirstName', '$LastName', '$Mobile', '$UserType', '$PasswordHash')";      
			$result=$conn->query($query);
		
			if($result) {
				mysqli_commit($conn);
				mysqli_close($conn);
				echo "Registered successful!";
			}

			else {
				echo "Registered failed!"; 
			}
		}
	}
}
?>