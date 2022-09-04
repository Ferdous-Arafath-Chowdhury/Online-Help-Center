<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


  <h3 style="text-align: center; color: blueviolet;"> List Of Request</h3>


<a href="index.php">Home</a>
<table class="table table-info table-sm">
<thead style="color : green;">
    <tr>
            <th class="">ID</th>
                <th class="">Email</th>
                <th class="">Income</th>
                <th class="">Pictute</th>
                <th class="">Meassage</th>
                <th class="">Pick up point</th>
                <th class="">Action</th>
                <th class="">Status</th>
             
    </tr>
    
</thead>



<?php

include 'ConnectionProvider.php';            
$sql ="select * from frequest";

$res =mysqli_query($con, $sql);

while($rows = mysqli_fetch_assoc($res))
{


?>

<tr style="color : black;">
<td class="py-2"><?php echo $rows['ID']; ?></td>
<td class="py-2"><?php echo $rows['Email']; ?></td>
<td class="py-2"><?php echo $rows['Income']; ?></td>
<td class="py-2">   <img src=" <?php echo $rows['Photo']; ?>"
   height = "100px" width = "100px" </td> 

<td class="py-2"><?php echo $rows['Msg']; ?> </td>
<td class="py-2"><?php echo $rows['Pickup']; ?> </td>
<td><a href="disburseinfo.php? id= <?php echo $rows['ID'] ;?>"> <button  name = "submit" class="btn" style="background-color : green; color: white">Disburse</button></a> <nbsp>
<td class="py-2"> <?php echo $rows['Status_']; ?> </td>  
<!-- <td class="py-2">Pending</td> -->






   

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
<?php
}

?>
</html>