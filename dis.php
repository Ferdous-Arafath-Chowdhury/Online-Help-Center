<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
  </head>
  <body>

  <!-- <h1 style="color: brown; text-align: center;">List Of Available item for your needs</h1> -->


<!-- <a href="upvideo.php">upvideo</a>
<a href="viewvideo.php">vvideo</a>
<a href="add_cat.php">vvideo</a>
<a href="view_karate_cat.php">vvideo</a> -->
<?php
include 'ConnectionProvider.php';
include 'nav1.php';
$sql ="select * from fdonation";

$res =mysqli_query($con, $sql);
?>
<h1 style="color: brown; text-align: center;">List Of Available item for your needs</h1>
<div class="row g-5">
  <?php
while($rows = mysqli_fetch_assoc($res))
{

?> 


   <div class="col-md-4"> 
    
    <div class="card">
      <div class="card-body">
       <img src="<?php echo $rows['Picture_of_food']; ?>" class="card-img-top" alt="..." height = "300px" width = "100px" >
        <p class="card-text"><?php echo $rows['Meassage']; ?></p>
        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
        <a href="Request.php? id= <?php echo $rows['Picture_of_food'] ;?>" >  <button  name = "submit" class="btn" style="background-color : green; color: white">Request</button></a>
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
    -->
  </body>
</html>