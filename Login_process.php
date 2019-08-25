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

      $Email = $_POST['Email'];
      $Password = $_POST['Password'];

      $query='SELECT * FROM CUSTOMERS WHERE Email=(:Email) and Password=(:Password)';

      $stid = oci_parse($conn, $query);

      oci_bind_by_name($stid,':Email',$Email);
      oci_bind_by_name($stid,':Password',$Password);

      oci_execute($stid);


       if($result=oci_fetch_array($stid)){
         echo"You are now logged in.";
         header('location: index.php'); 
}else{     
      echo"Iinvalid Email Or Password.";            
    }
}

?>
