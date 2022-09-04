<?php

include 'ConnectionProvider.php';
extract($_POST);
// echo $_POST['names'];
// echo $_POST['fis'];
// echo $_POST['efsss'];
// echo $_POST['dos'];

// if(isset($_POST['readrecord']))
// {
    $data = '<table class="table table-dark table-sm">
<thead style="color : green;">
    <tr>
            <th class="text-center">ID</th>
                <th class="text-center">Donor Name</th>
                <th class="text-center">Email</th>
                <th class="text-center">Phone</th>
                

    </tr>';
    
// </thead>

        

            

            $sql = "select * from medicine";

            $res =mysqli_query($con, $sql);

            while($rows = mysqli_fetch_assoc($res))
            {
            

        ?>
          
            <tr style="color : white;">
            <td class="py-2"><?php echo $rows['id']; ?></td>
            <td class="py-2"><?php echo $rows['name']; ?></td>
            <td class="py-2"><?php echo $rows['picture']; ?></td>
            <td class="py-2"><?php echo $rows['efficiency']; ?></td>
            <td class="py-2"><?php echo $rows['doses']; ?> </td>
            <!-- <td class="py-2"><?php echo $rows['Staled_Time']; ?> </td>
            <td class="py-2">   <img src=" <?php echo $rows['Picture_of_food']; ?>"
               height = "100px" width = "100px"
                </td>
            <td class="py-2"><?php echo $rows['Meassage']; ?> </td>
            <td class="py-2"><?php echo $rows['Time_and_Date']; ?> </td>
            <!-- <td class="py-2"><?php echo $rows['Picture_of_food']; ?> </td> -->
            <!-- <td class = "py-2"> Pending </td> -->
            <!-- <td class="py-2"><?php echo $rows['Time_and_Date']; ?> </td> -->
            <!-- <td><a href='updatefstatus.html? id= <?php echo $rows['Email'] ;?>"> <i class='fa fa-edit' style='color:#e750d6'></i></a></td> -->
            <!-- <td class="py-2"><?php echo $rows['Status_']; ?> </td>
            <td><a href="upfood.php? id= <?php echo $rows['ID'] ;?>"> <button  name = "submit" class="btn" style="background-color : green; color: white">Accept</button></a> <nbsp>
           <a href="rejfood.php? id= <?php echo $rows['ID'] ;?>"> <button  name = "submit" class="btn" style="background-color : red; color: white">Reject</button></a></td> 
           
       -->
        <?php
            }
         

        ?>
        </tbody>
    </table>
         






<?



 if(isset($_POST['names']) && isset($_POST['fis']) && isset($_POST['efsss']) && isset($_POST['dos']))
  {
 //$sql = "insert into medicine (name,picture,efficiency,doses) values ('$names', '$fis', $efsss','$dos')";
 $names =  $_POST['names'];
 $fis =  $_POST['fis'];
$efsss =  $_POST['efsss'];
$dos =  $_POST['dos'];

echo $names;

echo $fis;

echo $efsss;

echo $dos;

//$sql = "INSERT INTO `medicine` ('name','picture','efficiency','doses') Values (`$names`, `$fis`, `$efsss`,`$dos`)";
// $sql = "insert into medicine (name,picture,efficiency,doses) values ('$names', '$fis', $efsss','$dos')";
$sql =" INSERT INTO `medicine` (`Id`, `name`, `picture`, `efficiency`, `doses`) VALUES (NULL, '$names', '$fis', '$efsss', '$dos')";

$run= mysqli_query($con,$sql);

      
          if($run)
          {
          echo"
          
          <script>
                alert('Successfully  Added');
               
                
             </script>

        
             
          
          
          ";
          
          
             }

             else
             {
              die("Could notg error --> ".mysqli_connect_error());
             }



            }
         
         
    

      
?>
