<?php
include 'connect.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];

$sql = "INSERT INTO registration (firstname, lastname, email, username, password, mobile, address) VALUES ('$firstname', '$lastname', '$email', '$username', '$password','$mobile', '$address')";
$result =mysqli_query($conn, $sql);

if (mysqli_query($conn,$sql))
{
	header('Location: /stree/index.php');
}
else
	header('Location: /stree/index.php');
	
?>