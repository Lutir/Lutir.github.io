<?php 
require "connect.php";
$cash = 20; //$_POST['cash'];
/*
$query = "INSERT INTO user_data (`order`) VALUES(?)";
//$query = "SELECT * from user_data WHERE order=?";

	$statement=$db->prepare($query);
	$statement->bind_param("i", $cash);
	if($statement->execute()){
		echo "hell";
	}
*/
header("../orderSubmit.php");
?>