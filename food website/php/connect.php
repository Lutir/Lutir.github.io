<?php 
$error="We are having problem";

			$db = new mysqli('localhost','root','','projectDelta');
			if($db->connect_errno){
			die($error);}
			
?>