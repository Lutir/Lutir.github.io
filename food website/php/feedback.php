<!doctype html>
<html>
<head>
	<title>Login Page</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<link href='http://fonts.googleapis.com/css?family=Quicksand' rel='stylesheet' type='text/css'>	
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin+Slab">
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/store.css">
<link rel="stylesheet" type="text/css" href="../css/headfoot.css">
<link rel="stylesheet" type="text/css" href="../css/feedback.css">
<link rel="stylesheet" type="text/css" href="../css/login.css">
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
			<h1>Welcome To Feedback</h1>
			<p> When we came to NIT TRICHY we were told be what you want to be at NIT TRICHY.<br>
				We say eat what you want to eat at NIT TRICHY</p>
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
        <li><a href="#">About</a></li>
		
      </ul>
		</div>
		
	<div id="success">
			<h1>Feedback</h1>
			<p>-At -Name- we strive to ensure that your fooding experience exceeds your expectations.<br>
			In an effort to achieve this goal, we're constantly searching for new ways to improve our services, programs, and menus.<br>
			We'll succeed with your participation!
			<br>
			We would love to hear from you, so tell us what you like and dislike.<br>
			We value your comments, complaints, funny stories, compliments, as it is a way for us to be better at what we do.<br>
			<p> Fill in the form below or mail us at customercare@-name-.com and <br>we'll get back to you as soon as we can!</p>
			<form id="feedback" method="POST" action="feedbackStore.php">
			
			<textarea rows="10" cols="75" name="text" form="feedback"></textarea><br>
			<button type="submit">Submit</button><br>
			</form>
			
		
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
		<script src="js/sidemenu.js"></script>
	</body>
	

</html>