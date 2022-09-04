<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>View Tips!</title>
  </head>
  <style>
      .headtips{
        margin: 8px auto 0px 30px;
      }
      .tips{
          margin: 8px auto 0px 30px;
          border: 1px solid gray;
          padding:5px;
      } 
  </style>
  <body>

 
    <?php
            include  'ConnectionProvider.php';
            include 'nav1.php';
            $id = $_GET['id'];

            $sql = "SELECT * FROM `health_cat` WHERE cat_id = '$id '" ;
            $result = mysqli_query($con,$sql);
            while($row = mysqli_fetch_assoc($result)){
                $title = $row['cat_name'];
                $a_des = $row['description'];
            } 
             
            ?>

<!-- <div class="jumbotron" style="text-align: center; " >
<div class = "container my - 4 "></div>
  <h1 class="display-4">
                <?php echo $title ;?>
            </h1>
            <p class="lead">
                <?php echo $a_des ;?>
            </p>
            <hr class="my-3">
           
    </div>   -->
          
        <div class="container my-4">
        <div class="jumbotron" style="text-align: center; background-color: #808000 " >
            <h1 class="display-4" ><?php echo $title;?></h1>
            <p class="lead">  <?php echo $a_des;?></p>
            <hr class="my-4">
           
            
        </div>
    </div>

    


<?php
             
$sql = "SELECT * FROM `tips` WHERE cat_id = '$id '" ;
$result = mysqli_query($con,$sql);
while($row = mysqli_fetch_assoc($result)){
    $title = $row['title'];
    $a_des = $row['des'];
   
echo '
<h3 class="headtips">  '.$title. '  </h3> 
<div class="media tips" style="padding: 3t;" >
<div class="media-body">
 '.$a_des. '
</div>
</div> ';


}

?>






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