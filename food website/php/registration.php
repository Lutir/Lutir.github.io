<?php
//login.php//
session_start();
require "connect.php";
$username=$_POST['username'];
$password=$_POST['password'];
$department = $_POST['department'];
$firstName=$_POST['firstName'];
$lastName=$_POST['lastName']; 
$u=$_POST['txtCaptcha'];
$c= $_SESSION["security_code"];

if($u==$c){
// To protect MySQL injection for Security purpose
$username = stripslashes($username);
$password = stripslashes($password);
$department=stripslashes($department);
$firstName=stripslashes($firstName);
$lastName=stripslashes($lastName);

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['department']) && isset($_POST['firstName']) && isset($_POST['lastName'])){
	
	
	$query = "SELECT * FROM user_data WHERE username='$username'";
	$result = mysqli_query($db,$query);

	if(mysqli_num_rows($result)>= 1){
		header("location:../usernameTaken.php");
	}
        else {
	
	$query = "INSERT INTO user_data(username,password,department,firstName,lastName) VALUES(?,?,?,?,?)";
	$statement=$db->prepare($query);
	
	$statement->bind_param("sssss", $username,$password,$department,$firstName,$lastName);
	if($statement->execute()){
		header("location:../regSuccess.php");
	}
	else
	die("error");
        }
}
}
else{
	header("location:captchaIncorrect.php");
}
?>