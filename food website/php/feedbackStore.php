<?php
				$error="We are having problem";

			@$dbase = new mysqli('localhost','root','','projectDelta');
			if($dbase->connect_errno){
			die($error);}
			
			$text=$_POST['text'];
			@session_start();
			if(@$_SESSION['user']==session_id()){
			$user = $_SESSION['username'];
			}
			$user = stripslashes($user);
			$text= stripslashes($text);
			
			if(isset($_POST['text'])){
				$query = "INSERT INTO feedback(username,feedback) VALUES(?,?)";
	$statement=$dbase->prepare($query);
	
	$statement->bind_param("ss", $user,$text);
	if($statement->execute()){
		echo "helo";
		header("location:feedbackSubmit.php");
	}
	else
	die("error");
			}
	/*
			
			$query="SELECT * FROM feedback";
			$result=mysqli_query($dbase,$query);
			
echo "<b style='font-size:25px'>UserName</b>";
echo  "&nbsp; ";
echo "<b style='font-size:25px'>Feedback</b>";
echo  "&nbsp; ";
echo "<table>"; 
echo "<br><br>";
while($row = mysqli_fetch_array($result)){   


echo "<tr><td style='color:green;text-align:center'>" . $row['username'] . "</td><td style='color:green;text-align:center'>";
echo  "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;";
echo  $row['feedback'] . "</td></tr> ";
echo  "&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;";
}
echo "</table>"; 
*/
			?>