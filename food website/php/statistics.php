<!doctype html>
<html>
<head>
<title>Stats</title>
<script src="../jquery-1.11.3.min.js"></script>

<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/store.css">
<link rel="stylesheet" type="text/css" href="../css/headfoot.css">
<link rel="stylesheet" type="text/css" href="../css/regSuccess.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
<link rel="stylesheet" type="text/css" href="../css/statistics.css">
</head>
<body>
<div id="header" >
			
			<div id="headerDetails1">
				|<?php 
				session_start();
				if(@$_SESSION['user']==session_id()){
					$text = "logout";
					$link = "logout.php";
				}
				else{
					$text="login";
					$link ="../loginPage.php";
				}
				?><a href="<?php echo $link; ?>"> <?php echo $text?> </a>|&nbsp;&nbsp;
				|
					<?php if(@$_SESSION['user']==session_id()){
						$link="";
					$text = $_SESSION['username'];}
						else{
							$link="registrationForm.php";
							$text="Sign Up";
					} ?>
				<a href="<?php echo $link; ?>"><?php echo "Hello "; echo $text; ?></a>|
			</div>
			<div id="headerDetails2">
				
				<a id="menuButton">Menu ||</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a>-WEbSite Name-</a>
				</div>
				
		</div>	
	<div id="img">
		<div id="main1">
			<h1>Welcome To Statistics</h1>
			<p> Here you can know about our Top Active Customers Details ;)</p>
		</div>
	</div>
	<div id="sidelist">
		<!--sidelist close button-->
		<div id="slideclose">
		<img src="../images/close.png"></img>
		</div>
		<!-----side list------>
			 <ul>
        <li><a href="#" id="storeName">Order Now</a></li>
			<ul id="store-list" hidden>
			 <li><a href="../store.php"><i>--H.K.B--</i></a></li>
			<li><a href="../ccd.php"><i>-Cafe Coffee Day -</i></a></li>
			<li><a href="../buhari.php"><i>-Buhari-</i></a></li>
			</ul>
        <li><a href="../registrationForm.php">Register</a></li>
        <li><a href="../loginPage.php">-Login-</a></li>
        <li><a href="../about.php">About</a></li>
		
      </ul>
		</div>
		
		<div id="success">
			
		
<?php 
@$db = new mysqli('localhost','root','','projectDelta');
if($db->connect_errno){
	die($error);
}

$query = "SELECT * FROM user_data"; 	
$result = mysqli_query($db,$query);
//echo "UserName - First Name - Last Name - Order Value";
echo "<b style='font-size:25px'>UserName</b>";
echo  "&nbsp; ";
echo "<b style='font-size:25px'>FirstName</b>";
echo  "&nbsp; ";
echo "<b style='font-size:25px'>LastName</b>";
echo  " &nbsp;";
echo "<b style='font-size:25px'>orderValue</b>";

echo "<table>"; 
echo "<br><br>";
while($row = mysqli_fetch_array($result)){   


echo "<tr><td style='color:green;text-align:center'>" . $row['username'] . "</td><td style='color:green;text-align:center'>";
echo  "&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp;";
echo  $row['firstName'] . "</td><td style='color:green;text-align:center'>";
echo  "&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;";
echo  $row['lastName'] . "</td><td style='color:green;text-align:center'>";
echo  "&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
echo  $row['order'] . "</td></tr>";

}

echo "</table>"; 


?>
</div>
<div id="test">
		<div id="up"><br>
			<a id="social">Connect Socially with Us :)<br></a>
			<div id="socialBar">
			<p>
			<a href="http://www.facebook.com"><img id="facebook"  src="../images/facebook.png" /></a>
			<a href="http://www.twitter.com"><img id="twitter" src="../images/twitter.png" /></a>
			<a href="https://plus.google.com"><img id="google" src="../images/google.png" /></a>
			<a href="http://www.youtube.com"><img id="youtube" src="../images/youtube.png" /></a>
			</p>
			</div>
			<div id="socialText">
			<p>
			<a id="fbtext">Like Us On</a>
			<a id="twtext">Connect Via</a>
			<a id="gtext">Google Text</a>
			<a id="youtext">Watch Us On</a>
			</p>
			</div>
		</div>
		<div id="down">
			<div id="downText">
			<p>
				<a href="../about.php">About</a>
				<a href="../home.php">Home</a>
				<a href="../store.php">Stores</a>
				<a href="../contact.php">Contact Us</a>
			</p>
			</div>
		</div>
	</div>
		<script src="../js/sidemenu.js"></script>
</body>
</html>