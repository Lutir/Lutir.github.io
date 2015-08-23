<?php 
    @session_start();
	session_destroy();
	//header('../home.php');
	@setcookie(PHPSESSID,session_id(),time()-1);

?>

<!doctype HTML>
<html>
<head>
<title>HomePage</title>
<script src="../jquery-1.11.3.min.js"></script>

<link rel="stylesheet" type="text/css" href="../css/style.css">
<link rel="stylesheet" type="text/css" href="../css/headfoot.css">
<link rel="stylesheet" type="text/css" href="../css/logout.css">
<script src="../directorySlider.js"></script>

</head>

<body>
<!----main body------>
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
	<div id="background">
	
		<div id="header">
			
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
							$link="../registrationForm.php";
							$text="Sign Up";
					} ?>
				<a href="<?php echo $link; ?>"><?php echo $text; ?></a>|
			</div>
			<div id="headerDetails2">
				
				<a id="menuButton">Menu ||</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a>-WEbSite Name-</a>
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
		
		
	
	

	<div id="main" style="left:-50px">
	
	</div>
	<div id="logoutBox">
		<h1>You Have been Successfully logged Out :)</h1>
		<?php 
    @session_start();
	session_destroy();
	//header('../home.php');
	@setcookie(PHPSESSID,session_id(),time()-1);

?>
	<p>To <b>Login</b> again <a>Click <a href="../loginPage.php">Here</a></b></p>
		
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