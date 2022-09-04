<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<title>Display All Videos from database using php</title>
  <link rel="stylesheet" href="vstyle.css">
</head>
<body >

	<?php
	include 'nav1.php';

      $id = $_GET['id']; 


?> 


	<div class="container mt-3 mb-3">
	
		<div class="row">
				<?php
				include("ConnectionProvider.php");
					
				$q = "SELECT * FROM videos Where cat_id = '$id' ";

				$query = mysqli_query($con,$q);
				
				while($row=mysqli_fetch_array($query)) { 

					$name = $row['video'];
					?>

					<div class="col-md-4">
						<video  width="320" height="240" controls>
<source src="<?php echo 'videos/'.$name;?>">
</video>
					</div>

				<?php }
?>
</div>
				</div>
</body>
</html>