<?php
$servername = "127.0.0.1";
$username = "root";
$password = "123456";
$dbname = "getcar";

$conn = new mysqli($servername, $username, $password, $dbname);
 
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error); 
} else{
      
      $FirstName = $_POST['FirstName'];
      $LastName = $_POST['LastName'];
      $Mobile = $_POST['Mobile'];
      $Email = $_POST['Email'];
      $Password = $_POST['Password'];
      $RePassword = $_POST['RePassword'];

     if($Password != $RePassword){
      echo"Password does not match";
      }else{

       $sql="select * from customers where email = '$Email'";
       $result = $conn->query($sql);
       $row=mysqli_fetch_array($result);

        if($row){

          echo"Email already exists";

        }else{

      $query = "insert into customers(email, firstName, lastName, mobile, password) VALUES('$Email', '$FirstName', '$LastName', '$Mobile', '$Password')";      
      $reslut=$conn->query($query);
     
     if($result){
      echo "Registered successful!";          
      } 
      else{
        echo "Registered failed!"; 
      }    
    }
      
  }
  
}    

?>