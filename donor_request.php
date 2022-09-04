<!DOCTYPE html>
<html>
<head>

    <title>BLOOD DONATION</title>
    <link href="bootstrap.min.css" rel="stylesheet">

</head>

<body>

    <?php include 'navv.php'?>
    
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header"> DONER REQUEST</h1>
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
                            <form role="form" action="requ_added.php" method="post" onsubmit="return Validate() ">
                                     
                                <div class="form-group">
                                    <input class="form-control" name="Username" type="text" placeholder="Enter Your Name" required>
                                </div>

                                <div class="form-group">                                           
                                    <input class="form-control" type="email" placeholder="Enter Email Id" name="Email" required>
                                </div>
                                        
                                                                  
                                <div class="form-group">                                        
                                    <input class="form-control" type="number" placeholder="Enter Contact Number" name="P" required>
                                </div>
                                
                               
                                        
                                <div class="form-group">                                            
                                    <input class="form-control" placeholder="Enter Blood Group(Ex: B+)" name="Bg" required>
                                </div>

                               

                                <div class="form-group">                                         
                                    <input class="form-control" type="text" placeholder=" Having any serious Disease (yes/no)" name="Disease" required>
                                </div>

                                
                                <div class="form-group">
                                    <input for="Weight" class="form-control" type="text" placeholder="Enter Weight" name="Weight" id="Weight" required>
                                    <span id="w" class="font-weight:bold"></span>
                                </div>

                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="Amount of Blood" name="Amount" required>
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
        function Validate() 
        {
            let weight = document.getElementById('Weight').value;
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
