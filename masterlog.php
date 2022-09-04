
   <?php
      session_start();
    include 'ConnectionProvider.php';
// include 'Nav1.php';

$email =$_REQUEST['Username'];
$pass=$_REQUEST['Password'];
include 'ConnectionProvider.php';
$q="select * from  medi_s where username='$email' and password='$pass'";

$result= mysqli_query($con,$q);
$count=mysqli_num_rows($result);



if($count>=1)
{
	
  
 	header("location: masterpage.html");

   
}


else
{

    $aler =  "<script>alert('Invalid Email or Password')</script>";
    echo $aler;
    header("location: badminlogin.html");
    
}



?>

    

  



	





