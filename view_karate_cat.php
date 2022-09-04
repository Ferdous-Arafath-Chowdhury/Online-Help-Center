<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>

  p 
  {
    font-size: 30px; 
  }
</style>
     
  </head>
  <body>
  


  <?php 
         
         include 'ConnectionProvider.php';
         include 'nav1.php';
       $sql = "SELECT * FROM `karate_cat`"; 
       $result = mysqli_query($con, $sql);
       ?> 
         <h3 style="text-align: center ;  color: green;" >Browse your choiceable category</h3>
         <a href="view_offers.php">Offers</a>
       <div class="row g-5">
<?php
while($rows = mysqli_fetch_assoc($result))
{

?> 


 <div class="col-md-4"> 

  <div class="card">
    <div class="card-body">
     <img src="<?php echo $rows['Cover'];?> " class="card-img-top" alt="..." height = "300px" width = "100px" >
     <div   style = "background-color: green"> 

    
     <p class="card-text" > <strong><?php echo $rows['cat_name']; ?> </strong> </p>
      <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
      <a href="viewvideo.php? id= <?php echo $rows['cat_id'] ;?>" >  <button  name = "submit" class="btn" style="background-color : pink; color: white">View</button></a>
    </div>
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