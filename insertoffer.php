<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Donate</title>
</head>
<body>
    <?php
             include 'ConnectionProvider.php';

            //   if(isset($_POST['submit']))
            //   {
          
              $name = $_GET['ot'];
              $cd = $_GET['cd'];
              $pl = $_GET['pl'];
             

             
          
               $q = "INSERT INTO  offers(`offer_title`,`duration`,`place` ) Values('$name','$cd','$pl')";
          
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