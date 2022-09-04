<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>

* {
	padding: 0;
	margin: 0;
	box-sizing: border-box;
	font-family: arial, sans-serif;
}


.side-bar {
	width: 250px;
	background: green;
	min-height: 100vh;
	transition: 500ms width;
}
.body {
	display: flex;
}
.section-1 {
	width: 100%;
	background: url("fd4.png");
	background-size: cover;
	background-position: center;
	display: flex;
	justify-content: center;
	align-items: center;
	flex-direction: column;
}


.side-bar ul li {
	font-size: 16px;
	padding: 15px 0px;
	padding-left: 20px;
	transition: 500ms;
	white-space: nowrap;
	overflow: hidden;
	/* text-overflow: ellipsis; */
}
.side-bar ul li:hover {

	background:black ;
}
.side-bar ul li a {
	text-decoration: none;
    color: white;
	cursor: pointer;
	letter-spacing: 1px;
}
.side-bar ul li a i {
	display: inline-block;
	padding-right: 10px;
	font-size: 23px;
}
#navbtn {
	display: inline-block;
	margin-left: 70px;
	font-size: 20px;
	
}




    </style>
</head>
<body>
    
        <?php
    //   include  'fdonorlogin.php';
       session_start();


?>


      <!DOCTYPE html>
<html>
<head>
	<title>Organizer Page</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
</head>
<body style="background-image: url('fd1.png') ">
	
	<div class="body">
		<nav class="side-bar">
			
			<ul>
				<li>

			<?php echo $_SESSION["email"];?> 
</li>

			<li>
				
					<a href="donatefood.php">
					
						<i class="fa fa-eye" aria-hidden="true"></i>
						
						<span>Donate Product </span>
					</a>
				</li>
				
				<li>
					<a href="fdhistory.php">
					
						<i class="fa fa-eye" aria-hidden="true"></i>
						<span>My Donations History </span>
					</a>
				</li>
				<li>
					<a href="dis.php">
						<i class="fa fa-eye" aria-hidden="true"></i>
						<span>View available items</span>
					</a>
				</li>
				<li>
					<a href="fdonorlogin.html">
						<i class="fa fa-sign-out" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
				>
			</ul>
		</nav>
		<section class="section-1">
			
		
		</section>
	</div>

</body>
</html>
</body>
</html>