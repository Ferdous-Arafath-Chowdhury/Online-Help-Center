<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

         session_start();
         include 'ConnectionProvider.php';
          $email = $_REQUEST['email'];
          $income = $_REQUEST['income'];
          $photo = $_SESSION["pic"];
          $opinion = $_REQUEST['com'];
          $place = $_REQUEST['place'];
          $st = "Pending";


          $q = "INSERT INTO  frequest(`Email`,`Income`,`Photo`,`Msg`,`Pickup`, `Status_` ) Values('$email','$income','$photo','$opinion','$place','$st')";
          
          $run= mysqli_query($con,$q);
           
          if($run)
          {
          echo"
          
          <script>
                alert('Successfully  Added');
               
                
             </script>
             
          
          
          ";
          
          
             }

             else
             {
              die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
             }

         
?>




</body>
</html>