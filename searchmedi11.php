<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 
  </head>
  <body>
   


    <?php
    include "ConnectionProvider.php";
    $info = $_POST["search"];
    echo "$info";

    $sql = "SELECT * FROM `medi` WHERE name Like '%$info%' ";
    $run = mysqli_query($con, $sql);


      

?> 

    <div class="row g-5" style = "min-height: 500px">
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>