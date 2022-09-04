<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
        #ques{
            min-height: 433px;
        }

        .headtips{
        margin: 8px auto 0px 30px;
      }
      .tips{
          margin: 8px auto 0px 30px;
          border: 1px solid gray;
          padding:5px;
      }
      .aa
      {
           background-color: black; 
      }
      .hd 
      {
        margin: 3px auto 0px 30px;
      }
    </style>
    <title>Welcome to Forum</title>
</head>


   
  <?php
    session_start();
    include  "ConnectionProvider.php";
    include 'nav1.php'; 
   if (isset($_GET['qid']))
       {$id = $_GET['qid'];
        
        $_SESSION['qid']=$id;
        echo "$id";
    }
   
   else
   {
       $id=$_SESSION['qid'];

        echo "$id";
}



$sql = "SELECT * FROM `question` WHERE id = $id"; 
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $title = $row['q_title'];
       
       


    }
    
    ?>
        <!-- Category container starts here -->
        <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $title;?></h1>
            <p class="lead">bhjbhjghgb g </p>
            <hr class="my-4">
          
            
        </div>
    </div>


    
  <?php 

if(isset($_POST['submit']))
{
     if(isset($_SESSION['email'])){
    $a_des = $_POST['qdes'];
    $q_mail = $_SESSION['email']; 
   

    $sql = "INSERT INTO  answer(`qid`, `des` , `ansd_by` ) Values('$id', '$a_des', '$q_mail' )";
    $run  = mysqli_query($con,$sql);
  
if($run)
{
// echo"found";

}
else
{

$aler =  "<script>alert('Something Wrong')</script>";



}
     }
else
{
    $aler =  "<script>alert('Please Login first to add question')</script>";
    echo $aler;

}




}
?> 


    <form action="answerlist.php" method = "POST">
  <div class="container" >
        
    <textarea class="form-control" placeholder="Put Your Answer here" id="floatingTextarea" name = "qdes" ></textarea>
  
    
  </div>
  
  
  <button style="margin-top:15px" type="submit" class="btn btn-primary" name = "submit"> Submit</button> 
</form>


<?php
    
    $sql = "SELECT * FROM `answer` WHERE qid=$id"; 
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
       
        $desc = $row['des'];
        $id = $row['id']; 
        $time = $row['time_data'];
        $sender =  $row['ansd_by'];

          
echo '



 
   <p class = "hd"  style >  Answerds by '.$sender.' at  '.$time.'  </p>
   
   

<div class="media tips" style="padding: 3t;" >
<div class="media-body" style = "background-color: rgb(255, 230, 230)" >
 '.$desc. '
</div>

</div> ';
       

    }
    
    ?>





 




  </body>
</html>