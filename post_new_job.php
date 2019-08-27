<?php
	include 'connect.php';
	session_start();
	if(isset($_SESSION['username']) and isset($_POST['job_type'])) {
		$job_type = $_POST['job_type'];
		$job_description = $_POST['jobdescription'];
		$phone =  $_POST['phone'];
		$name = $_POST['name'];
		$insert_job_query = "INSERT into job(name, job_type, job_description, phone) VALUES ('$name', '$job_type', '$job_description', '$phone');";
		mysqli_query($conn, $insert_job_query);
	}
	header('Location: /stree');
?>	