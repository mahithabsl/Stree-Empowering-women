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

	<div class="body"><br>
<h1 align="center">Welcome to the earning section..! </h1>
<?php
  include 'connect.php';
  session_start();
  if(!isset($_SESSION['username'])) {
    echo "<script>alert('You are not logged in');window.location.replace('/stree');</script>";
    die();
  }

  $student_query = "SELECT * FROM registration WHERE username='".$_SESSION['username']."';";

  $student = mysqli_fetch_assoc(mysqli_query($conn, $student_query));
  $skills = explode(';', $student['skills']);


  if(in_array('cakemaking',$skills)) {
    echo '<div class="gallery">
      <a  href="show_jobs.php?job_type=cakemaking" >
        <img src="categories\cake.jpg" alt="" width="400" height="400">
      </a>
      <div class="desc"><h2>Cake Making</h2></div>
    </div>';
  }

  if(in_array('stitching',$skills)) {
    echo '<div class="gallery">
      <a  href="show_jobs.php?job_type=stitching" >
        <img src="categories\stich.jpg" alt="" width="400" height="400">
      </a>
      <div class="desc"><h2>Stitching</h2></div>
    </div>';
  }

  if(in_array('hairstyle',$skills)) {
    echo '<div class="gallery">
      <a  href="show_jobs.php?job_type=hairstyle" >
        <img src="categories\hair.jpg" alt="" width="400" height="400">
      </a>
      <div class="desc"><h2>Hair Styling</h2></div>
    </div>';
  }

  if(in_array('bouquetmaking',$skills)) {
    echo '<div class="gallery">
      <a  href="cake.html">
        <img src="categories\bouquet.jpg" alt="" width="400" height="400">
      </a>
      <div class="desc"><h2>Bouquet Making</h2></div>
    </div>';
  }

  if(in_array('clothbagstitching',$skills)) {
    echo '<div class="gallery">
      <a  href="cake.html">
        <img src="categories\bag.jpg" alt="" width="400" height="400">
      </a>
      <div class="desc"><h2>Cloth Bag Stitching</h2></div>
    </div>';
  }

  if(in_array('dreamcatcher',$skills)) {
    echo '<div class="gallery">
      <a  href="cake.html">
        <img src="categories\dream.jpg" alt="" width="400" height="400">
      </a>
      <div class="desc"><h2>Make your Dream Catcher</h2></div>
    </div>';
  }
?>
</div>
</body>

<div class="footer" style="float: bottom;background-color: ">
  <h3></h3>
  <ul>
    <p align="center">© Copyrights MRS Pvt. Ltd | Rights Reserved | Email us @ stree@yahoo.com </p></li>
    
  </ul>
</div>
</html>