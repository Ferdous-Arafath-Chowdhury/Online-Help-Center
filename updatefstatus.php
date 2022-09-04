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
    <h1>Update Status</h1>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->







    <!DOCTYPE html>
    <html>
    
        <head>
    
            <title>BLOOD DUNATION</title>
            <link href="bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            
    
        </head>
    
        <body>
    
            <div id="wrapper">
    
               
    
                <div id="page-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <h1 class="page-header">Update Status</h1>
                        </div>
                        
                    </div>
                  
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Please make your changes by updating the form below:
                                </div>
                                <div class="panel-body">
                                    <div class="row">
                                        <div class="col-lg-6">
    
                                            <?php
                                            
                                                include 'ConnectionProvider.php';
                                                $id=$_GET['id'];
                                                echo "$id";
                                                $qry= "select * from fdonation where Email='$id'";
                                                $result=mysqli_query($con,$qry);
                                                $count=mysqli_num_rows($result);

                                                if($count>0)
{
    header("location: index.php");

}
                                                if(!$result)
        
        {
             die("Could not connect to the database due to the following error --> ".mysqli_connect_error());
             echo"

             <script>
                   alert('Successfully  Added');
                   window.location.href = 'Addcustomer.php';
                   
                </script>
                
             
             
             ";
         

        }
                                                while($row=mysqli_fetch_array($result)){
                                            ?> 
    
                                            <form role="" action="updatefstatus.php" method="post">
                                            
                                                
                                                
                                               
    
                                               
    
                                                <div class="">                                              
                                                    <input class="form-control" placeholder="Enter Weight" type="number" name="weight" id="weight" value='<?php echo $row['Name']; ?>' required>
                                                    <span id="w" class="font-weight:bold"></span>
                                                </div>
    
                                                <div class="form-group">
                                                    
                  
    
                                            
                   
                                                <input type="hidden" name="id" value="<?php echo $row['id'];?>">
                                        
                                                <button type="submit"  class="btn btn-success">Make Changes</button>
        
                                            </form>
                                        </div>
    
                                        <?php
                                        }
                                        ?>
                                        
                                    </div>
                                    
                                </div>
                                
                            </div>
                            
                        </div>
                       
                    </div>
                    
                </div>
                
    
            </div>
            
            
            <script>
                function Validate() 
                {
                    let weight = document.getElementById('weight').value;
                    if(weight < 45)
                    {
                        document.getElementById('w').innerHTML =  "You are not eligeble for blood donation" ;
                        return false;
                    }
                }
            </script>
    
            
        </body>
    
        <?php include "footer.php" ?>
    
    </html>
                                 
    







  </body>
</html>