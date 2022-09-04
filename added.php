<!DOCTYPE html>

<head>

    <title>BLOOD DUNATION</title>
    <link href="bootstrap.min.css" rel="stylesheet">
    
</head>

<body>

    <div>

        <?php include 'nav.php'?>
        
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

                                    if(isset($_POST['name']))
                                    {
                                        $name = $_POST["name"];    
                                        $guardiansname = $_POST["guardiansname"];
                                        $gender = $_POST["gender"];
                                        $dob = $_POST["dob"];
                                        $weight = $_POST["weight"];
                                        $bloodgroup = $_POST["bloodgroup"];
                                        $email = $_POST["email"];
                                        $address = $_POST["address"];
                                        $contact = $_POST["contact"];
                                        $username = $_POST["username"];
                                        $password = $_POST["password"];

                                        include 'dbconnect.php';
                                                    
                                        $qry = "insert into donor(name,guardiansname,gender,dob,weight,bloodgroup,email,address,contact,username,password) values ('$name','$guardiansname','$gender','$dob','$weight','$bloodgroup','$email','$address','$contact', '$username', '$password')";
                                        $result = mysqli_query($conn,$qry); 

                                        if(!$result)
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



</html>
