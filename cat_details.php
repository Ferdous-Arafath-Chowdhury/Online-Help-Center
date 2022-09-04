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
          /* margin: 1px auto 0px 0px; */
          margin: 8px auto 0px 30px;
       
        
       
        text-decoration: none;
           /* color: green; */
      }

      .hd 
      {
        margin: 3px auto 0px 30px;
      }
      .tips{
          margin: 4px auto 0px 30px;
          border: 1px solid gray;
          padding:5px;
      }
      .aa
      {
           background-color: black; 
      }
      /* form{
      margin:150px;
      margin-top:10px;
    }  */
    input,textarea{
      width:100%;
      
      /* margin-top:30px; */
    }
    textarea{
      height:250px;
    }
      /* .para 
      {
         padding-top: 0px;
         padding:5px;
      } */
      /* h3{
      margin-top:50px;
      text-align:center
    } */
    /*  form{
      margin:150px;
      margin-top:0px;
    } 
    input,textarea{
      width:100%;
      margin-top:30px;
    }
    
    textarea{
      height:250px;
    }
    button{
      margin-top:20px;
      text-align:center;
    } */
  </style>
    
    <title>Welcome to Forum</title>
</head>

<body>
   
    <?php
    session_start();
    include  "ConnectionProvider.php";
    include 'nav1.php'; 
   if (isset($_GET['id']))
       {$id = $_GET['id'];
        
        $_SESSION['id']=$id;
        echo "$id";
     
    }
   
   else
   {
       $id=$_SESSION['id'];

    //    echo "$id";
}
    $sql = "SELECT * FROM `forum_cat` WHERE cat_id=$id"; 
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $title = $row['cat_name'];
        $desc = $row['description'];
       


    }
    
    ?>
     
        <div class="container my-4">
        <div class="jumbotron">
            <h1 class="display-4"><?php echo $title;?></h1>
            <p class="lead">  <?php echo $desc;?></p>
            <hr class="my-4">
            
            
        </div>
    </div>



  <?php 

if(isset($_POST['submit']))
{
     if(isset($_SESSION['email'])){
    $a_des = $_POST['qdes'];
    $q_title = $_POST['qtitle'];
    $q_mail = $_SESSION['email'];
    // echo "$q_title";
    // echo "$a_des"; 
    // echo "$id"; 

    $sql = "INSERT INTO question(`cat_id`, `q_title` , `q_des` ,`quer_by`) Values('$id', '$q_title', '$a_des','$q_mail' )";
    $run  = mysqli_query($con,$sql);
  
if($run)
{
echo"found";

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

 <form action="cat_details.php" method = "POST">
<div class="container">


      <input type="text"  placeholder="Add Problem Title" name = "qtitle">    
      <textarea style="margin-top:15px; height: 100px" class="form-control" placeholder="Put Your Question here" name = "qdes" id="floatingTextarea" name = "Ades" ></textarea>


  <button  style="margin-top:15px" type="submit" class="btn btn-primary" name = "submit"> Submit</button> 
</form>
</div>
<!-- <form action='addtips.php' method="POST">
    <input type="text" name = "title" placeholder = "Add Title"><br>
 
  <textarea style="margin-top:15px" class="form-control" placeholder="Put Your Tips here" id="floatingTextarea" name = "Ades" ></textarea>

<button style="margin-top:15px" type="submit" class="btn btn-primary" name='submit'>Submit</button> 
</form> -->


    <!-- <h3>Welcome To forum</h3> -->

    <?php
    
    $sql = "SELECT * FROM `question` WHERE cat_id=$id"; 
    $result = mysqli_query($con, $sql);
    while($row = mysqli_fetch_assoc($result)){
        $q_title = $row['q_title'];
        $desc = $row['q_des'];
        $id = $row['id']; 
        $time = $row['time_and_date'];
        $sender =  $row['quer_by'];

          
echo '
<div class="container"> 

   <a href="answerlist.php? qid=' . $id. '"  class = "headtips"> <p <strong>   <font size = "6">  ' .$q_title. '  </font>    </strong>  </a>  Asked by '.$sender.'</P>
   <p class = "hd"> at  '.$time.' </p>
   

<div class="media tips" style="padding: 3t;" >
<div class="media-body" style = "background-color: pink">
 '.$desc. '
</div>
</div> 
</div>';
       

    }
    
    ?>







    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>