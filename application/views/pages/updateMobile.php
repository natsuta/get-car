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

    $Email = $_SESSION['email'];
    $Password = $_POST["Password"];
    $Mobile = $_POST['Mobile'];


    $sql = "select * from customers where email='$Email'";
	$result = $conn->query($sql);
	$row=mysqli_fetch_array($result);

	if (password_verify($Password, $row['password'])) {

    	$sql = "UPDATE customers SET mobile = '".$Mobile."' WHERE Email = '".$_SESSION['email']."'";

    	$query = mysqli_query( $conn, $sql );

    	echo "Change phone number successfully.";
	}else{
        echo"something wrong";
    }

}


?>