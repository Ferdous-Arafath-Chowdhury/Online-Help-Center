<!-- <!DOCTYPE html>

<head>
    
    <title>BLOOD DUNATION</title>
    <link href="bootstrap.min.css" rel="stylesheet">

</head>
<body>
    

<div>

        
<?php include 'navv.php'?>
    
    
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">BLOOD DUNATION MANAGEMENT SYSTEM</h1>
    </div>
                
</div>            

<div class="row">
    <div class="col-lg-20">
                        
        <div class="panel-body">
            <div class="row">
                <div class="col-lg-6">
                    <form  action="index.php" method="post">
                        
                        <?php 

                            if(isset($_POST['Username']))                                        {
                                $name = $_POST['Username'];
                                $email = $_POST['Email'];
                                $phn =  $_POST['P'];
                                $bgroup =  $_POST['Bg'];
                                $dinfo =   $_POST['Disease'];
                                $Weight  = $_POST['Weight'];
                                $bAmount = $_POST['Amount'];

                                include 'dbconnect.php';
                                                
                                $q = "INSERT INTO  blood_donor_request  Values('$name','$email','$phn','$bgroup', '$dinfo','$Weight','$bAmount')";
                                $run= mysqli_query($conn,$q);

                                if(!$run)
                                {
                                    echo"ERROR";
                                }
                                else 
                                {                                                
                                    echo" <div style='text-align: center'><h1>SUBMITTED SUCCESSFULLY</h1>";
                                        
                                }

                            }
                            else
                            {
                                echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> Index </a></h3>";
                            }


                        ?>
                                                
                    </form>
                
                </div>
                
            </div>               
            
        </div>
    </div>
                    
</div>



</div>

</body>
</html> -->



<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">


    <title>BLOOD DUNATION</title>
    <link href="bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <div id="wrapper">

    <?php include 'navv.php'?>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">BLOOD DUNATION MANAGEMENT SYSTEM</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" action="index.php" method="post">
							<?php 

							if(isset($_POST['name'])){
								$name = $_POST["name"];    
								$gender = $_POST["gender"];
								$dob = $_POST["dob"];
								$weight = $_POST["weight"];
								$bloodgroup = $_POST["bloodgroup"];
								$address = $_POST["address"];
								$contact = $_POST["contact"];
								$bloodqty = $_POST["bloodqty"];
								$collection = $_POST["collection"];

								include 'dbconnect.php';
								//code after connection is successfull
								$qry = "insert into blood(name,gender,dob,weight,bloodgroup,address,contact,bloodqty,collection) values ('$name','$gender','$dob','$weight','$bloodgroup','$address','$contact','$bloodqty','$collection')";
								$result = mysqli_query($conn,$qry); //query executes

								if(!$result){
									echo"ERROR";
								}else {
                                    echo" <div style='text-align: center'><h1>SUBMITTED SUCCESSFULLY</h1>";

								}

							}else{
								echo"<h3>YOU ARE NOT AUTHORIZED TO REDIRECT THIS PAGE. GO BACK to <a href='index.php'> Index </a></h3>";
							}


							?>        
                                    </form>
                                </div>
                                
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    

</body>

<?php include "footer.php" ?>
</html>
