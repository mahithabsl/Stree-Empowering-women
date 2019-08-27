<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="css/earncss.css">
</head>
<body style="height:100vh;">
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
    <div class="new-job">
      <h1 align="center">Post new Job!</h1>
      <form action="/stree/post_new_job.php" method="POST">
        <select name="job_type">
          <option value="cakemaking">Cake Making</option>
          <option value="stitching">Stitching</option>
          <option value="bouquetmaking">Bouquet Making</option>
          <option value="hairstyle">Hair Styling</option>
          <option value="clothbagstitching">Cloth Bag Stitching</option>
          <option value="dreamcatcher">Dream Catcher</option>
        </select>
        <br>
        <input class="textfield" type="text" name="jobdescription" placeholder="Job Description" />
        <br>
        <input type="text" name="name" placeholder="Enter Your Name" />
        <br>
        <input type="text" name="phone" placeholder="Enter Your Mobile No" />
        <br>
        <input type="submit" name="submit" value="Post Job">
      </form>  
      </div>
    </div>
  </div>
  <style>
    .textfield {
      padding-top: 2rem;
      padding-bottom: 2rem;
    }
    select, input {
      margin: 10px;
      padding: 0.5rem;
      width: 300px;
    }
    .new-job {
      max-width: 500px;
      margin: auto;
      text-align: center;
    }
  </style>
</body>

<!--<div class="footer" style="float: bottom;background-color: ">
  <h3></h3>
  <ul>
    <p align="center">© Copyrights MRS Pvt. Ltd | Rights Reserved | Email us @ stree@yahoo.com </p></li>
    
  </ul>
</div>-->
</html>