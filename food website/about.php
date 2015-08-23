<!doctype html>
<html>
<head>
	<title>Login Page</title>
<script src="jquery-1.11.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/store.css">
<link rel="stylesheet" type="text/css" href="css/headfoot.css">
<link rel="stylesheet" type="text/css" href="css/about.css">
</head>

<body>
<div id="header">
			
			<div id="headerDetails1">
				|<?php 
				session_start();
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
			<div id="headerDetails2">
				
				<a id="menuButton">Menu ||</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a>-WEbSite Name-</a>
				</div>
				
		</div>	
	<div id="img">
		<div id="main1">
			<h1>Welcome To Our -About Us-</h1>
			<p> When we came to NIT TRICHY we were told be what you want to be at NIT TRICHY.<br>
				We say eat what you want to eat at NIT TRICHY</p>
		</div>
	</div>
	<!-----side list------>
		<div id="sidelist">
		<!--sidelist close button-->
		<div id="slideclose">
		<img src="images/close.png"></img>
		</div>
		<!-----side list------>
			 <ul>
        <li><a href="#" id="storeName">Order Now</a></li>
			<ul id="store-list" hidden>
			 <li><a href="store.php"><i>--H.K.B--</i></a></li>
			<li><a href="ccd.php"><i>-Cafe Coffee Day-</i></a></li>
			<li><a href="buhari.php"><i>-Buhari-</i></a></li>
			</ul>
        <li><a href="registrationForm.php">Register</a></li>
        <li><a href="loginPage.php">Login</a></li>
        <li><a href="php/pro.php">Profile</a></li> 
		<li><a href="about.php">About</a></li>
		
      </ul>
		</div>
		</div>
		<div id="success">
			<h2>About Us></h2>
			<p>
				 The process of ordering food <b>online</b> on <i>food2u</i> is very simple, fast and awesome ;)<br>
 Right on the homepage, you can <b>get started</b> by selecting your <b>Hostel Name</b> along with the <b>restaurant</b>.<br>
To provide customers better offers & discount customers will have to register in our site through a small <b>registration Form</b><br>
After login, you can either select the restaurant you want and further <b>filter your order</b> by all available cuisines like <br>
<>i Ice creams, Seafood, Salads, etc.</i> by selecting from the list on the left hand side of the page and all the restaurants that offer your desired cuisine will be shown.<br>
 From there you can look through the restaurant menu, pick your favorite dishes including <i>appetizers, desserts and drinks;</i><br>
 the order will arrive straight to your room in no time with free delivery. <br>
 To process the payment, you can <b>safely pay online</b> or <b>cash on delivery</b> in Indian rupee.<br>
 What are you waiting for? Choose food2u for hostel delivery and <b>order online now!</b><br>
 

			</p>
			
		</div>
		<div id="test">
		<div id="up"><br>
			<a id="social">Connect Socially with Us :)<br></a>
			<div id="socialBar">
			<p>
			<a href="http://www.facebook.com"><img id="facebook"  src="images/facebook.png" /></a>
			<a href="http://www.twitter.com"><img id="twitter" src="images/twitter.png" /></a>
			<a href="https://plus.google.com"><img id="google" src="images/google.png" /></a>
			<a href="http://www.youtube.com"><img id="youtube" src="images/youtube.png" /></a>
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
				<a href="about.php">About</a>
				<a href="home.php">Home</a>
				<a href="store.php">Stores</a>
				<a href="contact.php">Contact Us</a>
			</p>
			</div>
		</div>
	</div>
	</body>

</html>
