<!doctype html>
<html>
<head>
	<title>Profile Page</title>
<script src="../jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin+Slab">
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link rel="stylesheet" type="text/css" href="../css/store.css">
	<script src="../directorySlider.js"></script>
	
	<link rel="stylesheet" type="text/css" href="../css/headfoot.css">
<link rel="stylesheet" type="text/css" href="../css/profile.css">
</head>
	<body>
<div id="header" style='top:0px'>
			
			<div id="headerDetails1">
				|<?php 
				@session_start();
				if(@$_SESSION['user']==session_id()){
					$text = "logout";
					$link = "../php/logout.php";
				}
				else{
					$text="login";
					$link ="loginPage.php";
				}
				?><a href="<?php echo $link; ?>"> <?php echo $text?> </a>|&nbsp;&nbsp;
				|
					<?php if(@$_SESSION['user']==session_id()){
						$link="";
					$text = $_SESSION['username'];}
						else{
							$link="../registrationForm.php";
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
		
		<div id="content">
			<?php if(@$_SESSION['user']==session_id()){
						$link="";
					$text = $_SESSION['username'];}
						else{
							$text=".";
						}
					 ?>

			<h1>Welcome <?php echo $text; ?> </h1>
			<a id="changePassword" onclick="toggle()">->To Change Password Click <b>Here</b> </a>
			<div id="newPassword" hidden>
				<form id="passForm" action="passUpdate.php" method="POST" name="main" enctype="multipart/form-data">
				Old Password:<input name="password" type="password"></input><br>
				New Password:<input name="Newpassword" type="password"></input><br>
				<button type="submit">Submit</button>
				</form>
			</div>
			<div id="emailid">
			<br>
			<a>Subscribe To our NewsFeed :)</a>
			<form id="emailForm" action="emailUpdate.php" method="POST" name="main" enctype="multipart/form-data">
				Email Id:<input name="email" type="email"></input><br>
				<button type="submit">Submit</button>
				</form>
			</div>
			
		</div>
		<script>
		function toggle()
		{	$("#newPassword").toggle();
			//$(this).click(function(){
				//$("#newPassword").toggle();
			//});
		}
		</script>
		<div id="rightContent">
			<h1>-Links-</h1><br>
			<ul>
				<li>H.K.B</li>
				<li>Cafe Cofee Day</li>
				<li>Buhari</li>
			</ul>
		</div>
		<br style="clear:both">
		
		<div id="sidelist">
		<!--sidelist close button-->
		<div id="slideclose">
		<img src="../images/close.png"></img>
		<?php if(@$_SESSION['user']==session_id()){
						$link="";
					$text = $_SESSION['username'];}
						else{
							$text=".";
						}
					 ?>
					<a id="hello" style='font-family:Josefin Slab;font-size:25px'><?php echo "Hello "; echo $text; ?></a>
		
		</div>
		<!-----side list------>
		<div id="proPic">
		</div>
			<form id="picForm" action="proPic.php" method="POST" name="main" enctype="multipart/form-data" >
			<input type="file" name="photo"  /><br>
			<button type="submit">Submit</button>
			<button id="setting">Settings</button>
			</form><br>
			
			
		<div id="sideInfo">
		<a >Total Order:<?php 
			@$db = new mysqli('localhost','root','','projectDelta');
			if($db->connect_errno){
			die($error);
			}
			@session_start();
			$username="fuck";
			 $query = "SELECT * FROM user_data WHERE ".$username." = '"."fuck"."'";
			$result = mysqli_query($db,$query);
			echo "<table>"; 
		echo "<br><br>";
		//$row = mysqli_fetch_array($result);   


		//echo "<tr><td style='color:green;text-align:center'>" . $row['order'] . "</td></tr>";


		?>
		</a><br><br>
		<a><b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-Logout-</b></a><br>
		<image src="../images/power.png" onclick="#" />
		</div>
			 
		</div>
	
	<script src="../js/sidelist-profile.js"></script>	
</body>
</html>