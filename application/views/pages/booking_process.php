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
	$customerID = $_SESSION['customerID'];
	$location = $_POST['location'];
	$car = $_POST['car'];
	//change the date/time format
	$startdate = $_POST['pickupdate']." ".$_POST['pickuptime'].":00";
	$enddate = $_POST['returndate']." ".$_POST['returntime'].":00";

	$query = "insert into rental(customerID, locationID, carID, start_date, end_date) 
		VALUES('$customerID', '$location', '$car', '$startdate', '$enddate')";      
	$result=$conn->query($query);

	if($result) {
		mysqli_commit($conn);
		
		echo "Booking added! </a>";
	}
	else {
		echo $query;
		echo "Booking failed</a>"; 
	}
	mysqli_close($conn);
	
}
	
?>