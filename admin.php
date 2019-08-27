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
	  <li><a href="/stree/news.php">News</a></li>
    <li><a href="/stree/admin_edit_dates.php">Edit Dates</a></li>
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
      

          $students_query = "SELECT * FROM registration";
          $students = mysqli_query($conn, $students_query);

          while ($student = mysqli_fetch_assoc($students)) {
          $skills = explode(';', $student['skills']);
          echo '<li>
            <form class="student-form" method="POST" action="/stree/edit_student.php">        
              <input type="hidden" name="id" value="'.$student['id'].'">
              <span class="student-name" style="font-size: 1.2rem;margin-right: 20px;">'.$student['firstname'].' '.$student['lastname'].'</span>
              <span class="checkbox-span">
                <input type="checkbox" name="cakemaking" '.(in_array('cakemaking', $skills) ? 'checked=true' : 'false').' />  
                Cake Making
              </span>
              <span class="checkbox-span">
                <input type="checkbox" name="stitching" '.(in_array('stitching', $skills) ? 'checked=true' : 'false').' />
                Stitching  
              </span>
              <span class="checkbox-span">
                <input type="checkbox" name="hairstyle" '.(in_array('hairstyle', $skills) ? 'checked=true' : 'false').' />
                Hair Styling
              </span>
              <span class="checkbox-span">
                <input type="checkbox" name="bouquetmaking" '.(in_array('bouquetmaking', $skills) ? 'checked=true' : 'false').'"/>
                Bouquet Making
              </span>
              <span class="checkbox-span">
                <input type="checkbox" name="clothbagstitching" '.(in_array('clothbagstitching', $skills) ? 'checked=true' : 'false').' />
                Clothbag stitching
              </span>
              <span class="checkbox-span">
                <input type="checkbox" name="dreamcatcher" '.(in_array('dreamcatcher', $skills) ? 'checked=true' : 'false').'/>
                Dream Catcher
              </span>
              <input type="submit" name="Submit" value="Submit">
            </form>    
          </li>';
        ?>
         }
      </ol>
      
    </div>
  </div>
  
</body>

<!--<div class="footer" style="float: bottom;background-color: ">
  <h3></h3>
  <ul>
    <p align="center">© Copyrights MRS Pvt. Ltd | Rights Reserved | Email us @ stree@yahoo.com </p></li>
    
  </ul>
</div>-->
</html>