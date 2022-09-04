<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: bisque;">
   
    <?php
   
   include 'nav3.php';

   if(isset($_POST['submit']))
   {
        include 'ConnectionProvider.php';
        $Group = $_POST['search'];
      
        // $sql1 = "SELECT  SUM(bloodqty) FROM blood  WHERE bloodgroup = $Group";
    

        $sql1 = "SELECT bloodqty From blood WHERE bloodgroup = $Group"; 
        //  $sql1 = "SELECT Blood Group From blbank WHERE Stocked Amount = $Group";
        // $sql1 = "select Am  From bl where Gr = $Group";
        $query = mysqli_query($con,$sql1); 
        $output = mysqli_fetch_array($query);
        
        if(!$query)
        
        {
             die("Could not connect to the database due to the followingss error --> ".mysqli_connect_error());
            echo '<script type="text/javascript">';
            echo ' alert("Something Wrong")';  
            echo '</script>';

        }
        if($output)
        {

        
        
     
        
            // echo "<p style='color:red; text-align: center; font-size:50px '>Blood Not available</p>";
        
        
        
         $amount = $output['bloodqty'];
       
      
        // echo "Total Blood available of Group $Group: $amount ml ";
        echo "<p  style='color:green; text-align: center; font-size:50px '>  Total Blood Available of Group $Group: $amount ml.</p>"; 
        }
        else
        {
            echo "<p style='color:red; text-align: center; font-size:50px '>Not Found.</p>";
        }
        
   }
         

   ?>
 
<a href="#" >Click here for blood</a>

</body>
</html>