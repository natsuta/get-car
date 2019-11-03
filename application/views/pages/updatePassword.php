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
    $NewPassword = $_POST["NewPassword"];

    $sql = "select * from customers where email='$Email'";
	$result = $conn->query($sql);
	$row=mysqli_fetch_array($result);

	if (password_verify($Password, $row['password'])) {
       	
        $PasswordHash = password_hash($NewPassword, PASSWORD_DEFAULT);

    	$sql = "UPDATE customers SET password = '".$PasswordHash."' WHERE Email = '".$_SESSION['email']."'";

    	$query = mysqli_query( $conn, $sql );

    	echo "Changed password successfully.";
	}
	else {
		echo "Your password is incorrect. Go back to the <a>".base_url('profile')."profile page";
	}

}

?>