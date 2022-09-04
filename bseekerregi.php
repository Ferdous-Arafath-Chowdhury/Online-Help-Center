

<?php

include 'ConnectionProvider.php';
include 'navbar.php';

$name = $_POST['Username'];
$pass = $_POST['Password'];
$email = $_POST['Email'];
$phn =  $_POST['P'];
$Bloodgroup = $_POST['Bg'];
$Location = $_POST['Address'];

$q = "INSERT INTO  blood_seek  Values('$name','$pass','$email','$phn','$Bloodgroup','$Location')";

$run= mysqli_query($con,$q);
if($run)
{
  echo"

  <script>
         alert('Successfully  Registered');
        </script>


  ";
     
}

else
{
    echo"

  <script>
         alert('Not');
        </script>


  ";
}



?>