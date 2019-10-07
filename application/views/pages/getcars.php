<?php
$q = intval($_GET['q']);

$servername = "localhost";
$username = "root";
$password = "getcar123456";
$dbname = "getcar";

$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}

$sql="SELECT * FROM cars WHERE location_id = $q";
$result = mysqli_query($conn,$sql);
echo "<select name='car'>";
while($row = mysqli_fetch_array($result)) {
	echo "<option value='$row[carID]'>$row[carType]-$row[colour] $row[carName]</option>";

}
echo "</select>";
mysqli_close($conn);
?>