<?php
	//Linking or including the connection file
	include 'connection.php';
	session_start();
	//if Register Button is click
	if (isset($_POST['loginBtn'])) {
		//get the value from text field
		$email = $_POST['email'];
		$password = $_POST['password'];
		//check if is empty. Note || stands for OR
		if (empty($email) || empty($password)) 
		{
			// Alertting error message
			echo "<script>alert('All field is Required')</script>";
		}
		else
		{	
			$query = mysqli_query($con, "select * from user_tb where email = '$email' and password = '$password'");
			if (mysqli_num_rows($query)>0) {
				$_SESSION['user'] = $email;
				header('location:dashboard.php');
			}
			else{
				echo "<script>alert('Wrong Email or password')</script>";
			}
		}
	}
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
</style>
<body>
	<div>
		<nav class="navbar navbar-inverse">
			<div class="container">
				<div class="navbar-header">
				<a class="navbar-brand" href="#">CRUD in Native PHP</a>
				</div>
				<!-- <ul class="nav navbar-nav">
				<li class="active"><a href="#">Home</a></li>
				<li><a href="#">Page 1</a></li>
				<li><a href="#">Page 2</a></li> 
				</ul> -->
				<ul class="nav navbar-nav navbar-right">
				<li><a href="index.php"></span>Register</a></li>
				<li><a href="login.php"> Login</a></li>
				</ul>
			</div>
	</nav>
	</div>

	<div class="row">
		<!-- <div class="col-md-1"></div> -->
		<div class="col-md-4 col-md-offset-4 container" >
			
			<div class="grid">
				<form class="form-horizontal" action="login.php" method="post">
				  
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Email:</label>
				    <div class="col-sm-10">
				      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
				    </div>
				  </div>

				  <div class="form-group">
				    <label class="control-label col-sm-2" for="pwd">Password:</label>
				    <div class="col-sm-10"> 
				      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="password">
				    </div>
				  </div>

				  
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default" name="loginBtn">Login</button>
				    </div>
				  </div>
				</form>
			</div>
	</div>
	</div>
</body>
</html>