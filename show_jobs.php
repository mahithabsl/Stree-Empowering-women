<!DOCTYPE html>
<html>
<head>
	<title>Earn</title>
	<link rel="stylesheet" href="css/earncss.css">
</head>
<body>
	<div class="nav">
		<ul>
		  <li><a href="index.php">Home</a></li>
		  <li><a href="news.php">News</a></li>
		  <li style="float:right"><h1><a href="index.php">STREE</a></h1></li>
		</ul>
	</div>
	<div class="body">
		<?php
			include 'connect.php';
			$job_type = $_GET['job_type'];
			$map['cakemaking'] = 'Cake Making';
			$map['clothbagstitching'] = 'Cloth Bag Stitching';
			$map['stitching'] = 'Stitching';
			$map['hairstyle'] = 'Hair Styling';
			$map['bouquetmaking'] = 'Bouquet Making';
			$map['dreamcatcher'] = 'Making Dream Catcher';
		?>
		<h1>Jobs Related to <?php echo $map[$job_type] ?></h1>
		<ol>
			<?php 
				$jobs_query = "SELECT * FROM job WHERE job_type='$job_type'";
				$jobs = mysqli_query($conn, $jobs_query);
				while($job=mysqli_fetch_assoc($jobs)) {
					echo '<li>By: '.$job['name'].' ---<b> Job Description: </b> '.$job['job_description'].' ---<b> Contact No:</b>	 '.$job['phone'].' </li><br>';
				}
			?>
		</ol>
	</div>
</body>
<div class="footer" style="float: bottom;background-color: ">
  <h3></h3>
  <ul>
    <p align="center">© Copyrights MRS Pvt. Ltd | Rights Reserved | Email us @ stree@yahoo.com </p></li>
    
  </ul>
</div>
</html>