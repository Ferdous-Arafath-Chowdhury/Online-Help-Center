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
          
              $name = $_POST['Name'];
              $email = $_POST['Email'];
              $phone = $_POST['Phone'];
              $Pickup_Point=  $_POST['Point'];
              $Stalled_Time = $_POST['stalet'];
               $Image = $_FILES['myfile'];
               $Meassage = $_POST['Msg'];

               $filename = $Image['name'];
               $iserror  =  $Image['error'];
               $ftemp = $Image['tmp_name']; 

               $loc = 'Items/'.$filename;
               move_uploaded_file($ftemp,$loc);

             
          
               $q = "INSERT INTO  fdonation(`Name`,`Email`,`Phone`,`Pickup_Point`,`Staled_Time`, `Picture_of_food`,`Meassage` ) Values('$name','$email','$phone','$Pickup_Point','$Stalled_Time',' $loc','$Meassage')";
          
          $run= mysqli_query($con,$q);
            echo  "unamepass: ".$name.",".$email.",".$Meassage;
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