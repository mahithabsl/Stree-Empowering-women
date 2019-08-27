<?php 
	include 'connect.php';
	if(isset($_POST['Submit'])) {
		$date = $_POST['date'];
		$id = $_POST['id'];
		$update_date_query = "UPDATE dates SET exam_date='$date' WHERE id='$id'";
		mysqli_query($conn, $update_date_query);
	}
	header('Location: /stree/admin_edit_dates.php');
?>