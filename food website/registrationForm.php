<?php 
@session_start();
				if(@$_SESSION['user']==session_id()){
					header("location:php/alreadyLogin.php");
				}
?>

<!doctype html>
<html>
<head>
	<title>Registration Page</title>
<script src="jquery-1.11.3.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link rel="stylesheet" type="text/css" href="css/store.css">
<link rel="stylesheet" type="text/css" href="css/headfoot.css">
<link rel="stylesheet" type="text/css" href="css/register.css">
<link rel="stylesheet" type="text/css" href="css/capcha.css">
</head>

<body>
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
			<div id="headerDetails2">
				
				<a id="menuButton">Menu ||</a>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<a>-WEbSite Name-</a>
				</div>
				
		</div>
	
	<div id="img">
	
		<div id="main1">
			<h1>Welcome To Our Register-Page</h1>
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
		
		<div id="register">
<h1>Register Here :)</h1>
	<form id="form" method="POST" action="php/registration.php" onsubmit="return checkInp()">
		<a>First Name:</a>
		<input type="text" name="firstName" id="firstName" required /><br>
		<a>Last Name:</a>
		<input type="text" name="lastName" id="lastName" required /><br>
		<a id="department">Department:</a>
			<select  name="department" required>
		<option id="select">------Select-------</option>
		<option value="Computer Science & Engineering">Computer Science & Engineering</option>
		<option value="Electrical & Electronic Engineering">Electrical & Electronical Engineering</option>
		<option value="Electronic & Communication Engineering">Electronical & Communication Engineering</option>
		<option value="Instrumentation & Control Engineering">Instrumentation & Control Engineering</option>
		<option value="Mechanical Engineering">Mechanical Engineering</option>
		<option value="Civil Engineering">Civil Engineering</option>
		<option value="Architecture">Architecture</option>
		<option value="Production Engineering">Production Engineering</option>
		<option value="Metalurgical & Material Engineering">Metalurgical & Material Engineering</option>
		<option value="Chemical Engineering">Chemical Engineering</option>
		
	</select><br>
		<a>User Name:</a>
		<input type="text" name="username" id="username" required />
		<br>
		<a>Password:&nbsp;&nbsp;&nbsp;</a>
		<input type="password" name="password" id="password" required />
		<a id="passVisible">Password Visible?</a>
		<style>
		#passVisible{
			font-size:20px;
			color:green;
		}
		</style>
		<input type="checkbox" id="checkbox" onchange="visible()" ></input>
	<script>
	
	function visible(){
	var x=document.getElementById("password").value;
	if(document.getElementById("checkbox").checked){
	document.getElementById("password").type='text';	
	}
	else{
	document.getElementById("password").type='password';
	}
	}
	</script>
		<br>
	      <label for="captcha">Captcha:</label>
      <img id="imgCaptcha" src="captcha/create_image.php" /><br>
	  <label for="txt">Enter Captcha:</label>
	  <input id="txtCaptcha" type="text" name="txtCaptcha" value="" maxlength="10" size="32" /><br><br>
		

	<script src="main.js"></script>	
	<script>
	/*
	function chek(){
	var value=document.getElementById("text").value;
	//console.log(cap+","+value);
	if(value === cap){
	alert("Capcha Correct!");
	}
	else{
	alert("Enter Right Capcha");
	
	generate();
	return false;
	}
	
	}
	*/
	</script>
		<br>
		<button type="submit"  name="submit" >-Submit-</button>
		</form>
		</div>
		
		<div id="test">
		<div id="up"><br>
			<a id="social">Connect Socially with Us :)<br></a>
			<div id="socialBar">
			<p>
			<a href="http://www.facebook.com" target="_blank"><img id="facebook"  src="images/facebook.png" /></a>
			<a href="http://www.twitter.com" target="_blank"><img id="twitter" src="images/twitter.png" /></a>
			<a href="https://plus.google.com" target="_blank"><img id="google" src="images/google.png" /></a>
			<a href="http://www.youtube.com" target="_blank"><img id="youtube" src="images/youtube.png" /></a>
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