<?php

                                            include 'ConnectionProvider.php';
                                            $id=$_GET['id'];
                                            $Email = '$id' ;
                                            //  echo "$id";
                                            // echo "$Email";


                                            $qry = "UPDATE frequest SET Status_ = 'Disbursed'  WHERE ID = '$id' ";

                                            $result=mysqli_query($con,$qry);
                                            

                                            $sql = "SELECT *  FROM frequest Where ID = '$id'";
                                            $result1 = mysqli_query($con,$sql);
                                            $output1 = mysqli_fetch_array($result1);
                                            $e =  $output1['Email'];
                                            echo  "$e";

                                            if(!$result)
    
    {
         die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
        
     

    }

    $rcv_email = $output1['Email']; 
    
    echo "$rcv_email";
    $subject = "Donation Notification";
    $body = "Dear user, your request is granted.We will send this produuct to your location.";
    $headers = "From: ferdousarafathchowdhury@gmail.com";
    if(mail($rcv_email ,$subject,$body,$headers))
    {
      echo "<script> alert('Email is sent successfully');
   
      </script>";

    }
    else
    {
     echo "<script> alert('Not sent');
   
        </script>";

    }


   


?>

