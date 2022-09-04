<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Welcome to  Forum</title>
</head>

<body>

    <?php
    session_start();
        include 'ConnectionProvider.php';
        $id= $_GET['qid'];
        echo "$id";
        $sql = "SELECT * FROM `question` WHERE q_id = '$id '" ;
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $q_title = $row['q_title'];
            $q_des = $row['q_des'];
            $id =  $row['q_id'];
        }
        ?>




<div class="jumbotron" style="text-align: center; " >
<div class = "container my - 4 "></div>
  <h1 class="display-4">
                <?php echo $q_title ;?>
            </h1>
            <p class="lead">
                <?php echo $q_des ;?>
            </p>
            <hr class="my-3">
           
    </div>  


    <?php

 
$method = $_SERVER['REQUEST_METHOD'];
if($method == 'POST')
{
    if(isset($_SESSION['email'])){
    $a_des = $_POST['Ades'];
    $ans_mail = $_SESSION['email'];
    echo "$a_des"; 
    echo "$id"; 

    $sql = "INSERT INTO answers(`a_des`, `q_id` , `answer_mail`) Values('$a_des', '$id', '$ans_mail'  )";
    $run  = mysqli_query($con,$sql);
  
if($run)
{
echo"found";

}
else
{

$aler =  "<script>alert('Something Wrong')</script>";
echo $aler;


}


}
else
{

$aler =  "<script>alert('Please login first to make answer')</script>";
echo $aler;


}
}





?>

    <h3>Answers</h3>
    
    <form action="<?php $_SERVER['REQUEST_URI'] ?> " method="POST">
  <div class="container" >
   
    <textarea class="form-control" placeholder="Put Your question here" id="floatingTextarea" name = "Ades" ></textarea>
  
    
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button> 
</form>



<?php
       
        $sql = "SELECT * FROM `answers` WHERE q_id = '$id '" ;
        $result = mysqli_query($con,$sql);
        while($row = mysqli_fetch_assoc($result)){
            $a_des = $row['a_des'];
           
            $id =  $row['q_id'];
            $ans_mail = $row['answer_mail'];
        
        
      
  echo '
  <div class="media" style="padding: 3t;" >
  <img class="mr-3" src="..." alt="">
  <div class="media-body">

          <p>  '.$ans_mail. '  </p> 
         '.$a_des. '
  </div>
</div> ';


        }

        ?>
    






   
  




<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </body>
    </html>