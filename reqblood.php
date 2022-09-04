<?php

include 'ConnectionProvider.php';


$name = $_POST['Username'];
$email = $_POST['Email'];
$phn =  $_POST['P'];
$bgroup =  $_POST['Bg'];
$dinfo =   $_POST['Disease'];
$Weight  = $_POST['Weight'];
$bAmount = $_POST['Amount'];

$q = "INSERT INTO  blood_donor_request  Values('$name','$email','$phn','$bgroup', '$dinfo','$Weight','$bAmount')";
$run= mysqli_query($con,$q);
// echo  "unamepass: ".$name.",".$email;
if($run)
{
  echo"

  <script>
        // alert('Request Submitted');
        </script>


  ";
     
}




?>