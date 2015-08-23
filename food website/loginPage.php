<?php 
@session_start();
				if(@$_SESSION['user']==session_id()){
					header("location:php/alreadyLogin.php");
				}
?>
<!doctype HTML>
<html>
<head>
	<title>Login</title>
<script src="jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" typw="text/css" href="css/store.css">
	<link rel="stylesheet" type="text/css" href="css/headfoot.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<link rel="stylesheet" type="text/css" href="css/capcha.css">
</head>
<body>



<div id="header">
			
			<div id="headerDetails1">
				|<?php 
				/*<label for="captcha">Captcha:</label>
      <img  id="imgCaptcha1" src="captcha/create_image.php" />
	  <img src="">
	  <br>
	  <label for="txt">Enter Captcha:</label>
	  <input id="txtCaptcha" type="text" name="txtCaptcha" value="" maxlength="10" size="32" /><br><br>*/
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
			<div id="headerDetails2">
				
				<a id="menuButton">Menu ||</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a>-www.Food2u.com-</a>
				</div>
				
		</div>
		<div id="img">
		<div id="main1">
			<h1>Welcome To Our Login-Portal</h1>
			<p style="font-size:30px"> "The <b>secret of success</b> in life is <br>To <b>eat what you like</b> and let the <b>food fight it out inside</b>."<br> <b>-Mark Twain</b></p>
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
		
		<div id="loginPage" >
		<h1>Registered Users can Login Here:)</h1>
		<form id="form" method="POST" action="php/login.php" >
		
		<a>Username:</a>
		<input type="text" name="username" id="username" required /><br>
		<a>Password:</a>
		<input type="password" name="password" id="password" required />
		<br><br>
		
		
	<script src="main.js"></script>	
	
		<button type="submit"  name="submit" onclick="checkInp()" >-Submit-</button>
		</form>
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
		<script src="js/sidemenu.js"></script>
	
		</body>
</html>