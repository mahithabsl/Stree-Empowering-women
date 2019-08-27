<!DOCTYPE html>
<html>
<head>
	<title>Learn</title>
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
<?php

  session_start();
  if(!isset($_SESSION['username'])) {
    echo "<script>alert('You are not logged in');window.location.replace('/stree');</script>";
    die();
  }
?>
	<div class="body"><br>
<h1 align="center">Welcome to the learning section..! </h1>
<div class="gallery">
  <a  href="cake.html">
    <img src="categories\cake.jpg" alt="" width="400" height="400">
  </a>
  <div class="desc"><h2>Cake Making</h2></div>
</div>
<div class="gallery">
  <a  href="#">
    <img src="categories/stich.jpg" alt="" width="400" height="400px">
  </a>
  <div class="desc"><h2>Stitching</h2> </div>
</div>
<div class="gallery">
  <a  href="#">
    <img src="categories\hair.jpg" alt="" width="400" height="400">
  </a>
  <div class="desc"><h2>Hairstyles</h2></div>
</div>
<div class="gallery">
  <a  href="#">
    <img src="categories\bouquet.jpg" alt="" width="400" height="400">
  </a>
  <div class="desc"><h2>Bouquet Making</h2> </div>
</div>
<div class="gallery">
  <a  href="#">
    <img src="categories\bag.jpg" alt="" width="400" height="400">
  </a>
  <div class="desc"><h2>Cloth bag stitching</h2></div>
</div>
<div class="gallery">
  <a  href="#">
    <img src="categories\dream.jpg" alt="" width="400" height="400">
  </a>
  <div class="desc"><h2>DIY items</h2> </div>
</div>
</div>
</body>

<div class="footer">
  <h3></h3>
  <ul>
    <p align="center">© Copyrights MRS Pvt. Ltd | Rights Reserved | Email us at stree@yahoo.com </p></li>
    
  </ul>
</div>
</html>