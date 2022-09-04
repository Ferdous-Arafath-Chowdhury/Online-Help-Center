<!DOCTYPE html>
<html>
<head>

    <title>BLOOD DONATION</title>
    <link href="bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <?php include 'nav.php'?>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">ADD DONER'S DETAIL</h1>
            </div>
        </div>
           
        <div class="row">
            <div class="col-lg-12">
                    
                <div class="panel-heading">
                    <b>Please fill up the form below:</b>
                </div>
                
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <form role="form" action="added.php" method="post">
                                     
                                <div class="form-group">
                                    <input class="form-control" name="name" type="text" placeholder="Enter Your Name" required>
                                </div>
                                        
                                <div class="form-group">
                                    <input class="form-control" placeholder="Enter Guardian's Name" name="guardiansname" required>
                                </div>                                   
                                
                                <div class="form-group">                                       
                                    <input class="form-control" placeholder="Gender (Male or Female)" name="gender" required>
                                </div> 

                                <div class="form-group">     
                                    <input class="form-control" onfocus="(this. type='date')"placeholder="Enter Date Of Birth" name="dob" required>
                                </div>

                                <div class="form-group">  
                                    <input class="form-control" type="number" placeholder="Enter Weight" name="weight" required>
                                </div>
                                        
                                <div class="form-group">                                            
                                    <input class="form-control" placeholder="Enter Blood Group(Ex: B+)" name="bloodgroup" required>
                                </div>

                                <div class="form-group">                                           
                                    <input class="form-control" type="email" placeholder="Enter Email Id" name="email" required>
                                </div>

                                <div class="form-group">                                         
                                    <input class="form-control" type="text" placeholder="Enter Address Here" name="address" required>
                                </div>

                                <div class="form-group">                                        
                                    <input class="form-control" type="number" placeholder="Enter Contact Number" name="contact" required>
                                </div>

                                <div class="form-group">
                                           
                                    <b class="help-block"> Create Donor's Account </b>
                                    <input class="form-control" placeholder="Enter Username" name="username" required>                                          
                                            
                                </div>

                                <div class="form-group">
                                           
                                    <input class="form-control"placeholder="Enter Password" name="password" type="password" id="myInput" required>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" onclick="myFunction()">Show Password
                                        </label>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-success" style="border-radius:8%; background-color:#07BF01;color:black";>Submit Form</button>
                
                            </form>


                        </div>                      

                    </div>
                           
                </div>
                    
            </div>
                
        </div>
           
    </div>

    <script>
        function myFunction() 
        {
            var x = document.getElementById("myInput");
            if (x.type === "password") 
            {
                x.type = "text";
            } 
            else
            {
                x.type = "password";
            }
        }
    </script>


</body>

<?php include "footer.php" ?>
	
</html>
