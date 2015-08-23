<?php
	@session_start();
	//require "login.php";
	
	if($_SESSION['user']==session_id())
	{	
		
		$user=$_SESSION['username'];
	}
	else
	{
		header("location:../loginPage.php");
	}
?>
<!doctype HTML>
<html>
<head>
<title>HomePage</title>
<script src="../jquery-1.11.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin+Slab">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/headfoot.css">

<script src="directorySlider.js"></script>

</head>

<body>
<div class="directorySlider">
	<script>
	$(document).ready(function(){
  $('.directorySlider').directorySlider({
   animation: 'fade',
    filebase: 's_',
    directory: '../slideshow/',
    extension: 'jpg',
    numslides: 6,
    height: 20,
	width: 10
	

  });
});

	</script>
</div>
<!----main body------>
	<div id="background">
	
		<div id="header">
			
			<div id="headerDetails1">
				|<?php 
				@session_start();
				if(@$_SESSION['user']==session_id()){
					$text = "logout";
					$link = "php/logout.php";
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
							$link="registrationForm.php";
							$text="Sign Up";
					} ?>
				<a href="<?php echo $link; ?>"><?php echo "Hello "; echo $text; ?></a>|
			</div>
			</div>
			<div id="headerDetails2">
				
				<a id="menuButton">Menu ||</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a>-WEbSite Name-</a>
				</div>
				
		</div>
	
		<!-----side list------>
		<div id="sidelist">
		<!--sidelist close button-->
		<div id="slideclose">
		<img src="../images/close.png"></img>
		</div>
		<!-----side list------>
			 <ul>
        <li><a href="#" id="storeName">Order Now</a></li>
			<ul id="store-list" hidden>
			 <li><a href="../store.php"><i>--store1</i></a></li>
			<li><a href="../store.php"><i>--store2-</i></a></li>
			<li><a href="../store.php"><i>--store3</i></a></li>
			</ul>
        <li><a href="../registerationForm.php">Register</a></li>
        <li><a href="../loginPage.php">-Login-</a></li>
        <li><a href="#">About</a></li>
		
      </ul>
		</div>
	<div id="main">
		<h1 ><?php 
		if($_SESSION['user']==session_id())	{
		echo "Hello";echo " ";
		echo $_SESSION['username'];} 
		echo " "; ?> Welcome To -NAME-</h1>
		<p>To order now,select ur hostel name and place from he list below :)</p>
		<div id="placeName">
		<b>Select Ur Place:</b>
			<select>
				<option>H.K.B</option>
				<option>Cafe Coffee Day</option>
				<option>Buhari</option>
			</select>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<b>Select Ur Hostel Name:</b>	
		<select>
				<option>Coral</option>
				<option>Diamond</option>
				<option>Opal</option>
			</select>

		</div>
		<a id="submit"><b>-Submit-</b></a>
	</div>
	
		
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