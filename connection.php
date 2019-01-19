<?php
$host = 'localhost';
$username ='root';
$password ='root';
$db_name = 'crud';
$con = mysqli_connect($host,$username,$password,$db_name);
//check if our connection to database is wrong
if (!$con) {
	echo "<script>alert('Not Connected')</script>";
}
?>