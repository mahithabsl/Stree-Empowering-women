<!DOCTYPE html>
<html>
<head>
	<title>News</title>
	<link rel="stylesheet" href="css/earncss.css">
	<style type="text/css">
	.details{
		font-size: 30 px;

	}
	</style>
</head>
<body>
	<div class="nav">
	<ul>
	  <li><a href="/stree">Home</a></li>
	  <li><a href="#">News</a></li>
	  <li style="float:right"><h1><a href="index.php">STREE</a></h1></li>
	</ul>
	</div>
	<div class="details">	
	<h1>Details</h1>
	<p> If you want to apply for examination of any certification, send us your application on following<br>
	<b>Contact:</b> <b>stree@yahoo.com</b> or whatsapp us on <b>9988776699</b>.<br>
		<b>Venue</b>: Dosti Vihar Club House, Pokhran Road, Thane - 400601
	</p>
</div>
	<h1>Exam dates</h1>
	
	<ol style="margin-bottom: 20rem; background-color: white;">
		<?php 
			include 'connect.php';
			$exam_dates_query = "SELECT * FROM dates;";
			$exam_dates = mysqli_query($conn, $exam_dates_query);
			while($exam = mysqli_fetch_assoc($exam_dates)) {
				echo '<li style="background-color: white;">'.$exam['exam_for'].' - '.$exam['exam_date'].'</li><br/>';
			}
		?>
	</ol>

</body>
<div class="footer" style="float: bottom;background-color: ">
  <h3></h3>
  <ul>
    <p align="center">© Copyrights MRS Pvt. Ltd | Rights Reserved | Email us @ stree@yahoo.com </p></li>
    
  </ul>
</div>
</html>