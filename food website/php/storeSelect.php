<?php 

$place=$_POST['place'];

if($place=="Cafe Coffee Day"){
	header("location:../ccd.php");
}
else if($place=="H.K.B"){
	header("location:../store.php");
}
else{
	header("location:../buhari.php");
}

?>