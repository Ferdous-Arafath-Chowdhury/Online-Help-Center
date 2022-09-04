<?php
   
   session_start();
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <title>View Food Donation</title>
  </head>
  <body  style="background-color: antiquewhite ;">

       
<?php
        //   include  'navbar.php';
          include 'ConnectionProvider.php';
          include 'nav5.php'
    ?>

<h3 style="text-align: center; color: blueviolet;"> Food Donation History</h3>
<br>



<table class="table table-dark table-sm">
<thead style="color : green;">
    <tr>
            <th class="text-center">ID</th>
                <th class="">Donor Name</th>
                <th class="text-center">Email</th>
                <th class="">Phone</th>
                <th class="r">Pick up point</th>
                <th class="">Stalled Time</th>
                <th class="">Picture OF Food</th>
                <th class="">Meassage</th>
                <th class="">Time and Date</th>
                <th class="">Status</th>
                

    </tr>
    
</thead>
<!-- <tbody> -->
        <?php

            $em = $_SESSION["email"];

            $sql ="select * from fdonation where email = 'chynadiya2@gmail.com'";

            $res =mysqli_query($con, $sql);
           
              


            
              

            while($rows = mysqli_fetch_assoc($res))
            {
            

        ?>
            
            <tr style="color : white;">
            <td class="py-2"><?php echo $rows['ID']; ?></td>
            <td class="py-2"><?php echo $rows['Name']; ?></td>
            <td class="py-2"><?php echo $rows['Email']; ?></td>
            <td class="py-2"><?php echo $rows['Phone']; ?></td>
            <td class="py-2"><?php echo $rows['Pickup_Point']; ?> </td>
            <td class="py-2"><?php echo $rows['Staled_Time']; ?> </td>
            <!-- <td class="py-2"><?php echo $rows['Picture_of_food']; ?> </td> -->
            <td class="py-2">   <img src=" <?php echo $rows['Picture_of_food']; ?>"
               height = "100px" width = "100px">
                </td>
            <td class="py-2"><?php echo $rows['Meassage']; ?> </td>
            <td class="py-2"><?php echo $rows['Time_and_Date']; ?> </td>
            <!-- <td class="py-2"><?php echo $rows['Picture_of_food']; ?> </td> -->
           
            <td class="py-2"><?php echo $rows['Status_']; ?> </td>
           
           
      
        <?php
            }

        ?>
        </tbody>
    </table>


    

<!-- </body> -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous"> -->
    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
    


    
  </body>
</html>









