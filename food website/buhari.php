<?php 
				@session_start();
				$id="cmd";
				if(@$_SESSION['user']!=session_id()){
					header("location:php/login_store.php");
				}
				else if(@$_SESSION['user']!=session_id() && @$_SESSION['username']==$id){
					header("location:php/storeAdmin");
				}
?>
<!doctype HTML>
<html>
<head>
	<title>StorePage</title>
<script src="jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" typw="text/css" href="css/store.css">
	<script src="directorySlider.js"></script>
	<link rel="stylesheet" type="text/css" href="css/headfoot.css">
	<link rel="stylesheet" type="text/css" href="css/ccd.css">
</head>

<body>
	<div class="directorySlider">
	<script>
	$(document).ready(function(){
  $('.directorySlider').directorySlider({
   animation: 'fade',
    filebase: 's_',
    directory: 'slideshow/',
    extension: 'jpg',
    numslides: 6,
    height: 20,
	width: 10
	

  });
});

	</script>
	
	</div>
	
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
				<a>-www.Food2u.com-</a>
				</div>
				
		</div>
	
	<div id="img" >
	<div id="main1">
			<h1>Welcome To --Buhari--</h1>
			<p> </p>
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
	<div id="userData">
		
		<a style="position:relative;left:650px;top:20px;font-weight:bold">Welcome User</a>
		
		<p>To order now,select ur hostel name and place from he list below :)</p>
		<div id="placeName">
		<b>Select Ur Place:</b>
		<?php

		$place1="H.K.B";
		$place2="Cafe Coffee Day";
		$place3="Buhari";
		if(@$_POST['place']=== $place1 || @$_POST['place']===$place2 ||@$_POST['place']===$place3)
		 {
			?>
			<style>
			#place{
				display:none;
			}
			</style>
			<?php
			echo $_POST['place'];
		}
		
		?>
			<select id="place" >
				<option>H.K.B</option>
				<option>Cafe Coffee Day</option>
				<option>Buhari</option>
			</select>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<b>Select Ur Hostel Name:</b>	
		<?php

		$hostel = array("Diamond","Coral","Agate","Jade","Amber","Garnet","Zirkon");
		$i=0;
		for($i=0;$i<sizeof($hostel);$i++){
			if(@$_POST['name']=== $hostel[$i]){
				?>
			<style>
			#hostel{
				display:none;
			}
			</style>
			<?php
			echo $_POST['name'];
			break;
		}
		}
		?>	
		<select id="hostel">
				<option>Coral</option>
				<option>Diamond</option>
				<option>Opal</option>
			</select>
	</div>
	<div id="container">
	<div id="menuBody" >
			<h1>-MENU-</h1>
			
			<div class="rightmenu">
			<div class="variety">
					<div class="item">
						
          <div class="menu head">
            <p class="title">Veg. Meals(Available after 12) </p>
          </div>
          
					</div>
					
					<div class="description row">
          <div class="menu sub">
            <ul>
			
			<li data-cost="20" onclick="addCost(this)">Palak Paneer  &#8377 20</li>
			<li data-cost="25" onclick="addCost(this)">Daal Makhani  &#8377 25</li>
			<li data-cost="30" onclick="addCost(this)">Shahi Paneer  &#8377 30</li>
			<li data-cost="35" onclick="addCost(this)">Malai Kofta  &#8377 35</li>
			<li data-cost="20" onclick="addCost(this)">Mixed Vegetable  &#8377 20</li>
			<li data-cost="25" onclick="addCost(this)">Raajma  &#8377 25</li>
			<li data-cost="20" onclick="addCost(this)">Chola Bhatura  &#8377 20</li>
			<li data-cost="15" onclick="addCost(this)">Kashmiri Dum Aloo  &#8377 15</li>
			<li data-cost="20" onclick="addCost(this)">Veg Keema  &#8377 20</li>
			<li data-cost="25" onclick="addCost(this)">Fried Rice  &#8377 25</li>
			<li data-cost="35" onclick="addCost(this)">Badam Pulao Zafrani Rice  &#8377 35</li>
			<li data-cost="25" onclick="addCost(this)">Saffron Rice  &#8377 25</li>
			<li data-cost="25" onclick="addCost(this)">Pulao Raja Rice  &#8377 25</li>



			</ul>
			</div>
          
        </div>
      
				</div>
				
		<div class="variety">
        <div class="item row"> 
          <div class="menu head">
            <p class="title">Non. Veg. Meals(available after 12)</p>
          </div>
         </div>
        <div class="description row">
          
          <div class="menu sub">

            <ul class="menu">
            	<li data-cost="60" onclick="addCost(this)">Chicken Biriyani  &#8377 40</li>
            	<li data-cost="55" onclick="addCost(this)">Oyster  &#8377 45</li>
            	<li data-cost="45" onclick="addCost(this)">Butter Chicken  &#8377 35</li>
            	<li data-cost="45" onclick="addCost(this)">Kadhai Chicken  &#8377 35</li>
            	<li data-cost="50" onclick="addCost(this)">Handi Chicken  &#8377 40</li>
            	<li data-cost="55" onclick="addCost(this)">Chicken Masala  &#8377 35</li>
            	<li data-cost="60" onclick="addCost(this)">Pepper Chicken  &#8377 60</li>
            	<li data-cost="100" onclick="addCost(this)">Mutton do Pyaza  &#8377 100</li>
            	<li data-cost="40" onclick="addCost(this)">Egg Curry  &#8377 40</li>


			</ul>
			</div>
          
        </div>
      </div>

	  
	  </div>

		

			
						<div class="leftmenu">
				<div class="variety">
					<div class="item row">
						
          <div class="menu head">
            <p class="title">Fastfood</p>
          </div>
          
					</div>
					
					<div class="description row">
          <div class="menu sub">
            <ul>
			<li data-cost="25" onclick="addCost(this)">Dosa  &#8377 25</li>
			<li data-cost="65" onclick="addCost(this)">Idly Sambhar &#8377 65</li>
			
			<li data-cost="60" onclick="addCost(this)">Tangdi Kebab  &#8377 60</li>
			<li data-cost="20" onclick="addCost(this)">Masala Wada  &#8377 20</li>
			<li data-cost="20" onclick="addCost(this)">Paneer Pakoda  &#8377 20</li>
			<li data-cost="20" onclick="addCost(this)">Moong Kebab  &#8377 30</li>
			<li data-cost="20" onClick="addCost(this)">Achari Aloo Roll  &#8377 20</li>
			<li data-cost="5" onclick="addCost(this)">Samosa  &#8377 5</li>
			<li data-cost="30" onclick="addCost(this)">Veg Sandwich  &#8377 30</li>
			 <li data-cost="30" onclick="addCost(this)">Paneer Sandwich  &#8377 30</li>
			 <li data-cost="40" onclick="addCost(this)">Chicken Sandwich  &#8377 40</li>
			 <li data-cost="35" onclick="addCost(this)">Veg Roll  &#8377 35</li>
			 <li data-cost="35" onclick="addCost(this)">Paneer Roll  &#8377 35</li>
			 <li data-cost="45" onclick="addCost(this)">Chicken Roll  &#8377 45</li>
			 <li data-cost="30" onclick="addCost(this)">Asparagus and BabyCorn Wrap  &#8377 30</li>
			 <li data-cost="15" onclick="addCost(this)">Veg Noodles  &#8377 15</li>
			 <li data-cost="25" onclick="addCost(this)">Chicken Noodles  &#8377 25</li>
			 <li data-cost="40" onclick="addCost(this)">Baked Bean Roll  &#8377 40</li>
			 <li data-cost="60" onclick="addCost(this)">Tandoori CHicken  &#8377 60</li>
			 <li data-cost="30" onclick="addCost(this)">Veg Momos  &#8377 30</li>
			 <li data-cost="30" onclick="addCost(this)">Paneer Momos  &#8377 30</li>
			 <li data-cost="40" onclick="addCost(this)">Chicken Momos  &#8377 40</li>
			 <li data-cost="30" onclick="addCost(this)">Chicken Lolipop  &#8377 30</li>







			</ul>
			</div>
          
        </div>
      
				</div>
				
		<div class="variety">
        <div class="item row"> 
          <div class="menu head">
            <p class="title">Beverages</p>
          </div>
         </div>
        <div class="description row">
          
          <div class="menu sub">
            <ul class="menu">

          	<li data-cost="10" onclick="addCost(this)">Cold Drink(200 ml)  &#8377 10</li>
          	<li data-cost="30" onclick="addCost(this)">Cold Drink(600 ml)  &#8377 30</li>

          	<li data-cost="100" onclick="addCost(this)">Red Bull  &#8377 100</li>
          	<li data-cost="50" onclick="addCost(this)">Blue Lagoon  &#8377 50</li>
			</ul>
			</div>
          
        </div>
      </div>

	  <div class="variety">
        <div class="item row"> 
          <div class="menu head">
            <p class="title">Deserts</p>
          </div>
         </div>
        <div class="description row">
          
          <div class="menu sub">
            <ul>

          	<li data-cost="10" onclick="addCost(this)">Gulab Jamun  &#8377 10</li>
          	<li data-cost="5" onclick="addCost(this)">Rasgulla  &#8377 5</li>
          	<li data-cost="20" onclick="addCost(this)">Rabadi  &#8377 20</li>
          	<li data-cost="10" onclick="addCost(this)">Gajar ka Halwa  &#8377 10</li>

          	<li data-cost="10" onclick="addCost(this)">Rasmalai  &#8377 10</li>
          	<li data-cost="15" onclick="addCost(this)">Strawberry Pudding  &#8377 15</li>
          	<li data-cost="20" onclick="addCost(this)">Chocolate Pudding  &#8377 20</li>
          	<li data-cost="10" onclick="addCost(this)">Rajbhog  &#8377 10</li>
          	<li data-cost="15" onclick="addCost(this)">Kheer  &#8377 15</li>
          	<li data-cost="0" onclick="addCost(this)">Ice-Cream (as per MRP)</li>
          	<li data-cost="15" onclick="addCost(this)">Kulfi  &#8377 15</li>

			</ul>
			</div>
        </div>
      </div>
	</div> 
	</div>
	
        <br style="clear:both">
	
		<div id="total">
		<form id="form" method="POST" action="orderSubmit.php">
		<a>Total: </a><br>
		<input type=text id="sumcash" name="cash"></input>
	</div>
	

	<div id="submitOrder">
		<button id="submitButton" type="submit">-Submit Order-</button>
	</div>
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
	
	<script src="js/sidelist-store.js"></script>
	<script src="js/menu.js"></script>
	<dscript src="js/store-cash.js"></script>
	<script>	var sum = 0;
	function addCost(dish){
		var temp = dish.getAttribute("data-cost");
		sum=sum+parseInt(temp);
		document.getElementById("sumcash").value = sum;
	}
	</script>
	<?php 
	$sum="<script>document.write(sum)</script>"; 
	echo $sum;
	?>
</body>

</html>