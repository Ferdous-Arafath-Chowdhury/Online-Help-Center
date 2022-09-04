<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medi</title>
</head>
<body>
    <?php
             include 'ConnectionProvider.php';

            //   if(isset($_POST['submit']))
            //   {
          
              $name = $_POST['Name'];
              $Image = $_FILES['myfile'];
              $filename = $Image['name'];
              $iserror  =  $Image['error'];
              $ftemp = $Image['tmp_name']; 

              $loc = 'category/'.$filename;
              move_uploaded_file($ftemp,$loc);
             $desc = $_POST['des'];
              
              

             
          
             $q = "INSERT INTO  karate_cat(`cat_name`, `Cover`, `des` ) Values('$name', '$loc', '$desc')";
          
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
              die("Could not connect to the database ".mysqli_connect_error());
             }
            

    
             
          
          
          
            
            

          



    ?>
</body>
</html>