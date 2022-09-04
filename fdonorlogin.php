
   <?php
      session_start();
    include 'ConnectionProvider.php';
// include 'Nav1.php';

$email =$_REQUEST['Email'];
$pass=$_REQUEST['Password'];
include 'ConnectionProvider.php';
$q="select * from  donor where email='$email' and password='$pass'";

$result= mysqli_query($con,$q);
$count=mysqli_num_rows($result);

$_SESSION["email"] = $email;
$_SESSION["Password"] = $pass;

if($count>=1)
{
	
  
 	header("location: donatefood.php");

   
}


else
{

    $aler =  "<script>alert('Invalid Email or Password')</script>";
    echo $aler;
    header("location: badminlogin.html");
    
}



?>

    

  



	





