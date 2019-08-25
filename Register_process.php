<?php
$username = 's3604253';
$password = '123456789';
$servername = 'talsprddb01.int.its.rmit.edu.au';
$servicename = 'CSAMPR1.ITS.RMIT.EDU.AU';
$connection = $servername. "/" .$servicename;
$conn = oci_connect($username, $password, $connection);
 
// Test connection
if(!$conn)
{
    $e = oci_error();
    trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
}else{
      
      $FirstName = $_POST['FirstName'];
      $LastName = $_POST['LastName'];
      $Mobile = $_POST['Mobile'];
      $Email = $_POST['Email'];
      $Password = $_POST['Password'];
      $RePassword = $_POST['RePassword'];

     if($Password != $RePassword){
      echo"Password does not match";
      }else{

       $sql='SELECT * FROM CUSTOMERS WHERE Email=(:Email)';
       $stid = oci_parse($conn, $sql);

       oci_bind_by_name($stid,':Email',$Email);

       oci_execute($stid);

        if($result=oci_fetch_array($stid)){

          echo"Email already exists";

        }else{

      $query = 'INSERT INTO CUSTOMERS VALUES(:Email, :FirstName, :LastName, :Mobile, :Password)';

      $stid = oci_parse($conn,$query);
      
      oci_bind_by_name($stid,':FirstName',$FirstName);
      oci_bind_by_name($stid,':LastName',$LastName);
      oci_bind_by_name($stid,':Mobile',$Mobile);
      oci_bind_by_name($stid,':Email',$Email);
      oci_bind_by_name($stid,':Password',$Password); 
      
     if(oci_execute($stid)){
      echo "Registered successfully!";     
      }     
    }
      
  }
  
}    

?>