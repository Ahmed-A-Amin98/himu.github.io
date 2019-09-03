<?php

if(isset($_POST["username"])&&isset($_POST["password"]))
{

	require('connect_database.php');
$username = $_POST["username"];
$password=$_POST["password"];
$sq1="SELECT * FROM admin WHERE username='$username' AND password ='$password'";
$result=$conn->query($sq1);
if($result->num_rows > 0){
	session_start();
    $_SESSION['username'] = "$username";
	// $_SESSION['password'] = "$password";
	echo "T";
}
else{
	echo "error";
}
}
else
{
	echo "invalid";
}
?>