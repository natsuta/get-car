<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123456";
$dbname = "getcar";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
}else{

      $Email = $_POST["Email"];
      $Password = $_POST["Password"];

      $sql = "select * from customers where email = '$Email' and password='$Password'";
      $result = $conn->query($sql);
      $row=mysqli_fetch_array($result);
      if ($row) {
      echo"You are now logged in.";
    } else {
      echo "Error! Something wrong in your username or password!";
    }
}

?>