<?php
	//Linking or including the connection file
	include 'connection.php';
	//if Register Button is click
	if (isset($_POST['registerBtn'])) {
		//get the value from text field
		$fullname = $_POST['name'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		//check if is empty. Note || stands for OR
		if (empty($fullname) || empty($email) || empty($password)) 
		{
			// Alertting error message
			echo "<script>alert('All field is Required')</script>";
		}
		else
		{	
			$create = mysqli_query($con, "INSERT INTO user_tb(fullname,email,password)VALUES('$fullname','$email','$password')");
			//check if it has been inserted
			if ($create) {
				echo "<script>alert('Registration Successfuly')</script>";
			}
			else
			{
				echo "<script>alert('Error Occured!!! Please Refill')</script>";
			}
		}
	}
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
				<form class="form-horizontal" action="index.php" method="post">
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="email">Full Name:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="name" placeholder="Enter Name" name="name">
				    </div>
				  </div>
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
				      <div class="checkbox">
				        <label><input type="checkbox"> Remember me</label>
				      </div>
				    </div>
				  </div>
				  <div class="form-group"> 
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default" name="registerBtn">Submit</button>
				    </div>
				  </div>
				</form>
			</div>
	</div>
	</div>
</body>
</html>