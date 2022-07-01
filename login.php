<?php
$link = mysqli_connect('localhost','root','','evolve');
$Username=$_POST['Username'];
$email=$_POST['Email'];
$password=$_POST['password'];


$sql = "INSERT INTO usermaster ( UserID, Username, Email, Password) VALUES (0, '$Username', '$email', '$password')";

$result = mysqli_query($link , $sql);

if ($result)
{
	echo "UserName And Password Inserted";
}

header("Location: http://localhost/evolve/login.html");
?>