<?php
	//Linking or including the connection file
	include 'connection.php';
	session_start();
	//Global declaration of session to avaoid having error
	//$_SESSION['success'] = $_SESSION['error'] = '';

?>

<!DOCTYPE html>
<html>
<head>
	<title>CRUD</title>
	<meta name="description" content="Crud in Native PHP">
	<meta name="keywords" content="HTML,CSS,PHP, CRUD in PHP">
  	<meta name="author" content="Abdulraheem Abdulrasheed">
  	<meta name="author" content="abdulweb">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
</head>
<style type="text/css">
	.grid{
		margin-top: 20px;
		border: 1px solid #cca;
		border-radius: 10px;
		padding: 30px;
	}
	.border{
		border: 1px solid #99a;
	}
	table {
		margin-top: 20px;
	}
	tr,td,th{
		padding: 13px
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
			
			<div class="panel-primary border">
				<div class="panel-heading">
					Dashboard
				</div>
				<div class="panel-body">
					<p>You have login successfully</p>
				</div>
			</div>
	</div>
	</div>
	<div class="row">
		<div class="col-md-9 col-md-offset-3">
		<p class="text-success"><?=$_SESSION['success']?></p>
		<p class="text-danger"><?=$_SESSION['error']?></p>
			<table class="table-bordered">
				<tr>
					<th>S/N</th>
					<th>Name</th>
					<th>Email</th>
					<th>Action</th>
				</tr>
				<tr>
				<?php
				// code to retrive record from database
				$sql = mysqli_query($con, "select * from user_tb");
				$counter =1; 
				while ($rows = mysqli_fetch_assoc($sql)) {
				?>
					
				
					<td><?=$counter?></td>
					<td> <?=$rows['fullname']?> </td>
					<td> <?=$rows['email']?></td>
					<td>
						<!-- <a href="" class="btn btn-primary">Edit</a> -->
						<form action="delete.php" method="get">
						<input type="hidden" value="<?=$rows['id']?>" name ="del"/>
						<button class="btn btn-danger" onclick="return confirm('Are You sure YOu want to Delete?');" type="submit">Delete</button>
						</form>
					</td>
				</tr>
				<?php 
					$counter++;
				}
				?>
			</table>
		</div>
	</div>
</body>
</html>