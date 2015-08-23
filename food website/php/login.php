<?php
require "connect.php";
$username = $_POST['username'];
$password = $_POST['password'];
$admin = "cmd";
$u=$_POST['txtCaptcha'];
$c= $_SESSION["security_code"];
echo $u;
echo $c;
if($u==$c){



$query = "SELECT * FROM user_data WHERE username='$username' AND password='$password'";
$result = mysqli_query($db,$query);
	if(mysqli_num_rows($result)>= 1)
	{
		if($_POST['username']==$admin){
			@session_start();
			$_SESSION['username']=$username;
	$_SESSION['user']=session_id();
	header("location:../adminHome.php");
		}
		else{
			@session_start();
			$_SESSION['username']=$username;
	$_SESSION['user']=session_id();
	header("location:../home.php");
		}
		
	}
	if(mysqli_num_rows($result)< 1){
		echo "hello";
		header("location:incorrectUsername.php");
	}
}
else{
		header("location:captchaIncorrect.php");
}
?>