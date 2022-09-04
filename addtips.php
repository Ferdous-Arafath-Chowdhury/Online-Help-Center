<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <style>
    h3{
      margin-top:50px;
      text-align:center;
      color: green ;
    }
    form{
      margin:150px;
      margin-top:20px;
    }
    input,textarea{
      width:100%;
      margin-top:30px;
    }
    
    textarea{
      height:150px;
      background-color: green ;
    }
    button{
      margin-top:20px;
      text-align:center;
    }
  </style>
  <body>


  <?php
      session_start();
       include  "ConnectionProvider.php";
       include 'nav1.php'; 
      if (isset($_GET['id']))
          {$id = $_GET['id'];$_SESSION['id']=$id;}
      
      else
      {$id=$_SESSION['id'];}
        

      
      //echo "$id";
       

?>


<?php
 
//$method = $_SERVER['REQUEST_METHOD'];
//echo "$method";
//if($method == 'POST')
if(isset($_POST['submit']))
{
    $title = $_POST['title'];
    $a_des = $_POST['Ades'];
    
    // echo "$a_des"; 
    // echo "$id"; 
    // echo "<script>alert('Please login first to make answer')</script>";

    $sql = "INSERT INTO tips(`cat_id`, `title` , `des`) Values('$id', '$title', '$a_des' )";
    $run  = mysqli_query($con,$sql);
  
// if($run)
// {
// echo"found";

// }

  
// if($run)
// {
// echo"fouffff";

// }

    }



?> 
    <h3>Add Tips here</h3>
    <form action='addtips.php' method="POST">
    <input style = "background-color: blanchedalmond;" type="text" name = "title" placeholder = "Add Title"><br>
 
  <textarea style="margin-top:15px; background-color: blanchedalmond; " class="form-control" placeholder="Put Your Tips here" id="floatingTextarea" name = "Ades" ></textarea>

<button style="margin-top:15px" type="submit" class="btn btn-primary" name='submit'>Submit</button> 
</form>




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