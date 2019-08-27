<?php
	include 'connect.php';
	$skills = "";
	foreach($_POST as $key=>$value) {
		if($key !='id' and $key != 'Submit') {
			echo $key;
			echo '  ';
			echo $value;
			echo "<br>";
			$skills .= $key;
			$skills .= ';';
		}
	}
	$skills = substr($skills, 0, -1);
	$update_student_skills = "UPDATE registration SET skills='$skills'";
	mysqli_query($conn, $update_student_skills);
	header('Location: /stree/admin.php');

?>