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

.contents 
        {
            
            text-align: center;
            font-family: 'Open Sans', sans-serif; 
            /* padding: 10% 0;  */
          height: 420px;
          width: 500px;
          border: 3px solid black;
           border-radius: 55px;
          background-color: blanchedalmond;
            margin: 0 auto; 
           margin-left: 370px; 
           margin-top: 40px; 
        
        }
        .fc 
        {
            width: 300;
           
            font-family: 'Open Sans', sans-serif; 
            box-sizing: border-box;
            padding: 7px 43px;
            outline: 23;
            color: black
        }
        body
        {
            background-repeat: no-repeat;
        }
             
   
    
    </style> 



  </head>
  <body   style="background-image: url('ind4.jpg')">
    <?php
    session_start();

     $id =$_REQUEST['id'];
     $_SESSION["id"] =   $id ;
     
?>
      <div class = "contents">
      <form action="enroll2.php" method = "POST">

       <h3 style="text-align: center; color: green">Enroll To The Course</h3>
       <input class = "fc"  type="text" name="name" placeholder="Name" id=""> <br><br>
        
        <input class = "fc"  type="text" name="email" placeholder="Enter Your Email" id=""> <br><br>
      
       
        <input  class = "fc" type="text" name="add" placeholder="Address" id=""> <br> <br>
        
      
     
        <input  class = "fc" type="submit">
        
        

      </form>
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