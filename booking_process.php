

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cars";

$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}

else {
	$pickuplocation = $_POST['pickuplocation'];
	$returnlocation = $_POST['returnlocation'];
	$bodytype = $_POST['bodytype'];
	$car = $_POST['car'];
	$pickupdate = $_POST['pickupdate'];
	$returndate = $_POST['returndate'];
if($pickupdate == $returndate) {
		echo"You have to rent the car more than one day";
	}
		
	else{


			$query = "insert into bookings(BookingID, Pickup_location, Return_location, Bodytype, Vehicle_selected, Pickup_date, Return_date) 
				VALUES('null', '$pickuplocation', '$returnlocation', '$bodytype', '$car', '$pickupdate', '$returndate')";      
			$result=$conn->query($query);
		
			if($result) {
				mysqli_commit($conn);
				mysqli_close($conn);
				echo "Booking added! </a>";
			}
			else {
				echo "Booking failed</a>"; 
			}
			
		}
	
}
	
	
	
?>


