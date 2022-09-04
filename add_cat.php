<!DOCTYPE html>
<html>
<head>
	<title>Add medicine</title>
	<!-- <link rel="stylesheet" type="text/css" href="fstyle.css"> -->
	<link href="https://fonts.googleapis.com/css?family=Quicksand&display=swap" rel="stylesheet">
	<meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,maximum-scale=1.0">

<style>

*{
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: 'Quicksand', sans-serif;

}

body{
	height: 100vh;
	width: 100%;
	
	
}

.container{
	position: relative;
	width: 100%;
	height: 100%;
	display: flex;
	justify-content: center;
	align-items: center;
	padding: 20px 100px;
	
}


.contact-box{
	max-width: 650px;
   justify-content: center;
	align-items: center;
	text-align: center;
	background-color: white;
	box-shadow: 0px 0px 19px 5px rgba(0,0,0,0.19);
	
}



.right{
	padding: 25px 40px;
}

h2{
	/* position: relative; */
	padding: 0 0 10px;
	/* margin-bottom: 2px; */
}



.field{
	width: 100%;
	border: 2px solid rgba(0, 0, 0, 0);
	outline: none;
	background-color: rgba(230, 230, 230, 0.6);
	padding: 0.5rem 1rem;
	font-size: 1.1rem;
	margin-bottom: 22px;
	transition: .3s;
}

.field:hover{
	background-color: rgba(0, 0, 0, 0.1);
}

textarea{
	min-height: 100px;
}

.btn{
	width: 100%;
	padding: 0.5rem 1rem;
	/* background-color: #2ecc71; */
	background-color: blue;
	color: #fff;
	color: green;
	cursor: pointer;
	transition: .3s;
}

.btn:hover{
   
	background-color: green;
}




</style>

</head>
<body>
  <?php
      include 'nav1.php';
  ?>
  <form action="insertcat.php" method="POST" enctype="multipart/form-data" >

	
  
	<div class="container">
		<div class="contact-box">
			<div class="left"></div>
			<div class="right">
				<h2>Add Video Category</h2>
				<input type="text" name="Name" class="field"   placeholder="Category name" required>
                <label for="myfile">Please insert the picture of the Cover Page:</label>
         <input type="file" id="myfile" name="myfile"> <br> <br>
		
	
			
                <input type="text" class="field" name="des" placeholder="Description" required>
       
		
        
		
				
				<button class="btn" type="submit">Add</button>
			</div>
		</div>
	</div>

  </form>
  
</body>
</html>