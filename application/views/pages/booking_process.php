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
	$startdate = $_POST['pickupdate'].$_POST['pickuptime'];
	$enddate = $_POST['returndate'].$_POST['returntime'];
if($pickupdate == $returndate) {
		echo"You have to rent the car more than one day";
	}
		
	else{


			$query = "insert into Bookings(customerID, locationID, carID, start_date, end_Date) 
				VALUES('$customerID', '$location', '$car', '$startdate', '$enddate')";      
			$result=$conn->query($query);
		
			if($result) {
				mysqli_commit($conn);
				
				echo "Booking added! </a>";
			}
			else {
				echo "Booking failed</a>"; 
			}
			mysqli_close($conn);
		}
	
}
	
	
	
?>


