<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title></title>
    <style>
      .search
      {
        text-align: right;
      }
      .aa 
      {
        text-decoration: none;
        
      }
      /* .search1
      {
        text-align: right;
      } */
     
    </style>
  </head>
  <body style="background-color: black;">
  
   <?php
         include 'nav1.php';
   ?> 
  <a  class = "aa" href="user_view_cat.php">Get Hellth Tips</a>  &nbsp    <a class = "aa" href="sugtips.php">Request For tips</a>   
   
  <form action="searchmedi.php" method = "POST">
  <div class="search">
    <label for=""> Search</label>
    <input type="text" name="search" placeholder = "Search by disease" >
    <input type="submit" name="submit" > 
    
  
    </form>
     

    </div>
  
<br>
    <form action="searchmedi11.php" method = "POST">
  <div class="search">
    <label for=""> Search</label>
    <input type="text" name="search" placeholder = "Search by name" >
    <input type="submit" name="submit">
    
  </div>
 
    </form>
    <br>


<?php
include 'ConnectionProvider.php';
$sql ="select * from medi";

$res =mysqli_query($con, $sql);
?>
<div class="row g-5">
  <?php
while($rows = mysqli_fetch_assoc($res))
{

?> 




   <div class="col-md-4"> 
    
    <!-- <div class="card">
      <div class="card-body">
       <img src="<?php echo $rows['picture']; ?>" class="card-img-top" alt="..." height = "300px" width = "100px" >
        <p class="card-text"><?php echo $rows['desc']; ?></p>
      
      </div> -->
      <div class="card" style="width: 25rem;">
  
  <div class="card-body">
  <img src="<?php echo $rows['picture']; ?>" class="card-img-top" alt="..." height = "300px" width = "100px" >
    <p class="card-text"><?php echo $rows['desc']; ?></p></p>
  
  <ul class="list-group list-group-flush">
    
  <li class="list-group-item"><p class="card-text"><?php echo $rows['efficiency']; ?></p></li>
    <li class="list-group-item"><p class="card-text"><?php echo $rows['doses']; ?></p></li>
   
  </ul>
 
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