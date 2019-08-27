<?php
include 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];

$sql = "SELECT * from registration WHERE username='$username' AND password='$password'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0)
{
	session_start();
	$_SESSION['username'] = mysqli_fetch_assoc($result)['username'];
	header('Location: index.php');
}
else{
	echo ("<script>
    window.alert('Wrong credential');
    window.location.href='http://localhost/stree/login.html';
    </script>");
}
?>
