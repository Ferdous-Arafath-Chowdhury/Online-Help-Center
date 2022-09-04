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

        
         include 'ConnectionProvider.php';
          $email = $_REQUEST['email'];
          $prob = $_REQUEST['prob'];
         

          $q = "INSERT INTO tsuggesion (`des`, `email`) Values( '$prob', '$email' )";
          
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