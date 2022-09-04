<html>

<head>

    <title>BLOOD DONATION</title>
    <link href="bootstrap.min.css" rel="stylesheet">

</head>


<body>

        <?php include 'nav.php'?>
        
        <div class="container-fluid">
            <div class="row">
                <div class=".col-lg-12">
                    <h1 class="page-header">DONER'S DETAIL</h1>
                </div>
            </div>  

			<div class="row">
                
                <div class=".col-lg-12">
                    
                    <div class="panel-heading">
                        <b>Total Records Of Donors:</b>
                    </div>
								
					<div class="panel-body">
                        
                        <div class="table-responsive">
							
                            <table class="table" id="dataTables-example">
									
                                <?php

                                    include "dbconnect.php";

                                    $qry = "select * from donor";
                                    $result = mysqli_query($conn,$qry);


                                    echo"
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Username</th>
                                                <th>Guardian's Name</th>
                                                <th>Gender</th>
                                                <th>DateOfBirth</th>
                                                <th>Weight</th>
                                                <th>Blood Group</th>
                                                <th>Email</th>
                                                <th>Address</th>
                                                <th>Contact</th>
                                            </tr>
                                        </thead>";

                                    while($row=mysqli_fetch_array($result))
                                    {
                                        echo"
                                            <tbody>
                                                <tr>
                                                    <td>".$row['name']."</td>
                                                    <td>".$row['username']."</td>
                                                    <td>".$row['guardiansname']."</td>
                                                    <td>".$row['gender']."</td>
                                                    <td>".$row['dob']."</td>
                                                    <td>".$row['weight']."</td>
                                                    <td>".$row['bloodgroup']."</td>
                                                    <td>".$row['email']."</td>
                                                    <td>".$row['address']."</td>
                                                    <td>".$row['contact']."</td>

                                                </tr>
                                            </tbody>";
                                    }

                                ?>
						    </table>
									
				        </div>
				    </div>		

		        </div>	
		    </div>	
		</div>
		

   

 
</body>
<?php include "footer.php" ?>
</html>