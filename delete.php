<?php
	include 'connection.php';
	session_start();
	if (empty($_GET['del'])) {
		header('location:dashboard.php');
	}
	else{
		$del_id = $_GET['del'];
		$query = mysqli_query($con, "DELETE FROM user_tb where id = '$del_id'");
		if ($query) {
			$_SESSION['success'] = 'Record Deleted successfully';
			header('location:dashboard.php');
		}
		else{
			$_SESSION['error'] = 'sorry!!! Record Not Deleted';
			header('location:dashboard.php');
		}
	}
?>