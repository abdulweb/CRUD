<?php
	//Linking or including the connection file
	include 'connection.php';
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<style type="text/css">
	.grid{
		margin-top: 20px;
		border: 1px solid #cca;
		border-radius: 10px;
		padding: 30px;
	}
</style>
<body>
	<div>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
				<a class="navbar-brand" href="#">CRUD in Native PHP</a>
				</div>
				
				<ul class="nav navbar-nav navbar-right">
				<li><a></span> Welcome [<?php
				if ($_SESSION['user'] =='') {
					header('location:login.php');
				}
				else{
					echo $_SESSION['user'];
					?>
					]</a></li>
				<li><a href="index.php">logout</a></li>
				
				<?php
			}
				?>
				
				</ul>
			</div>
	</nav>
	</div>

	<div class="row">
		<!-- <div class="col-md-1"></div> -->
		<div class="col-md-4 col-md-offset-4 container" >
			
			<div class="panel">
				<div class="panel-heading">
					Dashboard
				</div>
				<div class="panel-body">
					<p>You have login successfully</p>
				</div>
			</div>
	</div>
	</div>
</body>
</html>