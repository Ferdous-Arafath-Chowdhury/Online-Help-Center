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
    include "ConnectionProvider.php";
    $info = $_POST["search"];
    echo "$info";

    $sql = "SELECT * FROM `medi` WHERE efficiency LIKE '$info' ";
    $run = mysqli_query($con, $sql);


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

    <div class="row g-5">
  <?php
while($rows = mysqli_fetch_assoc($run))
{

?> 


   <div class="col-md-4"> 
    
    <div class="card">
      <div class="card-body">
       <img src="<?php echo $rows['picture']; ?>" class="card-img-top" alt="..." height = "300px" width = "100px" >
        <p class="card-text"><?php echo $rows['efficiency']; ?></p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        <!-- <a href="details.php? id= <?php echo $rows['Picture_of_food'] ;?>" >  <button  name = "submit" class="btn" style="background-color : green; color: white">Request</button></a> -->
      </div>
    </div>
  </div>
 
<?php
}
?>
 </div>



    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>


</body>
</html>