<!DOCTYPE html>
<html>
<head>
	<title>Streeee</title>
	<link rel="stylesheet"  href="css/style.css">
</head>

<body style="margin:0px;">
<div class="body">
<header id="main-header">
	<div class="container">
		<p>STREE</p>
	</div>
</header>
<nav id="navbar">
	<div class="container1">
		<ul>
			<li> <a href="index.php">Home</a>
			</li>
			<li> <a href="news.php">News</a>
			<?php
			session_start();
			if(isset($_SESSION['username'])) {
				echo "Welcome ".$_SESSION['username'];
				echo '<li><a href="admin.php">Admin Panel</a></li>';
				echo '<li ><a href="logout.php">Logout</a></li>';
			} else {
				echo '<li ><a href="login.html">Login</a></li>';
				echo '<li ><a href="signup.html">Signup</a></li>';
			}
			?>
			
		</ul>
		
	</div>
</nav>
	
<div class="Intro">
	<h1>Welcome...!</h1>
	<h2>You are here to??</h2>
</div>

<div class="row">
  <div  title="column Order">
    <h2>ORDER</h2>
    <p>Click here to order something which is homemade, organic, hygienic and 100% authentic...!</p>
    <a href="order.php"><button class=button title="login 3"><h1>Order</h1></button></a>
  </div>
  <div  title="column Earn">
    <h2>EARN</h2><p>
   Click here if
   you have completed a course and 
   want to apply for a job...!</p>
    <a href="earn.php"><button class=button title="login 2"><h1>Earn</h1></button></a>
  </div>
  <div  title="column Learn">
    <h2>LEARN</h2>
    <p>Click here to learn some great skills and earn easy bucks...!</p><br>
    <a href="learn.php"><button class=button  title="login 1"><h1>Learn</h1></button></a>
  </div>
</div>
<div class="footer">
  <p>© Copyrights MRS Pvt. Ltd | Rights Reserved | Email us @ stree@yahoo.com </p>
</div>
</div>
</body>
</html>