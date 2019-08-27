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

	<div class="body"><br>
    <h1 align="center">Welcome to the Admin Panel!</h1>
    <h2>List of students</h2>
    <div class="students">
      <ol>
        <?php
          include 'connect.php'; 
          session_start();
          if(!isset($_SESSION['username'])) {
            echo "<script>alert('You are not logged in');window.location.replace('/stree');</script>";
            die();
          }
          $check_if_admin_query = "SELECT * from registration WHERE username='".$_SESSION['username']."' AND admin=1;";
          $user = mysqli_query($conn, $check_if_admin_query);
          if(mysqli_num_rows($user) <= 0) {
            echo "<script>alert('You are not an admin');window.location.replace('/stree');</script>";
            die();
          }
      

          $dates_query = "SELECT * FROM dates";
          $dates = mysqli_query($conn, $dates_query);

          while ($date = mysqli_fetch_assoc($dates)) {
          echo '

          <li style="width: 100%; margin: 0.5rem;">
            <form class="student-form" method="POST" action="/stree/edit_date.php">        
              <input type="hidden" name="id" value="'.$date['id'].'">
              <span class="exam-for" style="font-size: 1.2rem;margin-right: 20px;">'.$date['exam_for'].'</span>
              <input type="text" name="date" value="'.$date['exam_date'].'">
              <input type="submit" name="Submit" value="Submit">
            </form>
          </li>';
         }
        ?>
      </ol>
      
    </div>
  </div>
  <style>

  </style>
</body>

<!--<div class="footer" style="float: bottom;background-color: ">
  <h3></h3>
  <ul>
    <p align="center">© Copyrights MRS Pvt. Ltd | Rights Reserved | Email us @ stree@yahoo.com </p></li>
    
  </ul>
</div>-->
</html>