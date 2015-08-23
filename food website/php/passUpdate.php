<?php //passUpdate.php

@$db = new mysqli('localhost','root','','projectDelta');
if($db->connect_errno){
	die($error);
}
$password=$_POST['password'];
$Newpassword=$_POST['Newpassword'];

$query="UPDATE user_data
		SET password=".$Newpassword.
		"WHERE password=".$password."";
$result = mysqli_query($db,$query);

?>