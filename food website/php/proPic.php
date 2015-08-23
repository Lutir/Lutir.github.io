<?php 
$upload = $_SESSION['username'];
$upload="1";
echo $upload;
if($_FILES['photo']['name'])
	{
		echo "\n";
	//if no errors...
	if(!$_FILES['photo']['error'])
	{
		//size check
		$new_file_name = strtolower($_FILES['photo']['tmp_name']); //rename file
		if($_FILES['photo']['size'] > (512000)) //can't be larger than 500 KB
		{
			$valid_file = false;
			
			$message = 'Oops!  Your file\'s size is to large.';
			echo $message;
		}
		else{
			$valid_file=1;
		}
		
		
		//if the file has passed the test
		if($valid_file)
		{
			//move it to where we want it to be
			move_uploaded_file($_FILES['photo']['tmp_name'], ''.$upload);
			$message = 'Congratulations!  Your file was accepted.';
			
			echo $_FILES['photo']['tmp_name'], ''.$upload;
			
		}
	}
	//if there is an error...
	else
	{
		//set that to be the returned message
		$message = 'Ooops!  Your upload triggered the following error:  '.$_FILES['photo']['error'];
		echo $message;
	}
}
?>