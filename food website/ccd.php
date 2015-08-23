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
    directory: 'ccd/',
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
				<a>-WEbSite Name-</a>
				</div>
				
		</div>
	
	<div id="img" >
	<div id="main1">
			<h1>Welcome To Cafe Coffee Day.--</h1>
			<p> Welcome to Cafe Coffee Day, a coffee shop where the young at heart unwind.<br>
			This coffee goes all over the world to clients across, EUROPE and Japan, making us one of the top coffee exporters in the country.
			<br>Also-"A <b>Lot</b> Can Happen Over <b>Coffee</b>" ;) </p>
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
		<div id="container">
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

		$hostel = array("Diamond","Coral","Agate","Jade","Amber","Garnet","Zirkon","Opal");
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
				<option>Agate</option>
				<option>Jade</option>
				<option>Amber</option>
				<option>Garnet</option>
				<option>Zirkon</option>
			</select>
	</div>
	</div>
	<div id="menuBody" >
			<h1>-MENU-</h1>
						<div class="rightmenu">
			<div class="variety">
				<div class="item">
						
          <div class="menu head">
            <p class="title">Hot Coffee's </p>
          </div>
          
					</div>
					
					<div class="description row">
          <div class="menu sub">
            <ul>
			
			<li data-cost="65" onclick="addCost(this)" data-name="Espresso">Espresso  &#8377 65</li>
			<li data-cost="75" onclick="addCost(this)" data-name="Cappuchino">Cappuchino  &#8377 75</li>
			<li data-cost="95" onclick="addCost(this)" data-name="Hazelnut Cappuchino">Hazelnut Cappuchino  &#8377 95</li>
			<li data-cost="80" onclick="addCost(this)" data-name="Cafe Latte">Cafe Latte  &#8377 80</li>
			<li data-cost="110" onclick="addCost(this)" data-name="Irish Latte ">Irish Latte  &#8377 110</li>
			<li data-cost="80" onclick="addCost(this)" data-name="Macchiato">Macchiato  &#8377 80</li>
			<li data-cost="99" onclick="addCost(this)" data-name="Irish Coffee">Irish Coffee  &#8377 99</li>
			<li data-cost="95" onclick="addCost(this)" data-name="Cafe Mocha">Cafe Mocha &#8377 95</li>

			</ul>
			</div>
          
        </div>
      
				</div>
				
		<div class="variety">
        <div class="item row"> 
          <div class="menu head">
            <p class="title">Cold Coffee's</p>
          </div>
         </div>
        <div class="description row">
          
          <div class="menu sub">

            <ul class="menu">
            	<li data-cost="140" onclick="addCost(this)" data-name="Devils Own">Devils Own  &#8377 140</li>
            	<li data-cost="99" onclick="addCost(this)" data-name="Iced Eskimo">Iced Eskimo  &#8377 99</li>
            	<li data-cost="140" onclick="addCost(this)" data-name="kaapi Nirvana">kaapi Nirvana   &#8377 140</li>
            	<li data-cost="45*2" onclick="addCost(this)" data-name="Tropical Iceberg"> Tropical Iceberg  &#8377 90</li>
            	<li data-cost="99" onclick="addCost(this)" data-name="Vegan Shake">Vegan Shake  &#8377 99</li>
            	
			</ul>
			</div>
          
        </div>
      </div>

	  
	  </div>

		

			
						<div class="leftmenu">
				<div class="variety">
					<div class="item row">
						
          <div class="menu head">
            <p class="title">Friend's Of Frappe~</p>
          </div>
          
					</div>
					
					<div class="description row">
          <div class="menu sub">
            <ul>
			<li data-cost="99" onclick="addCost(this)" data-name="Cafe Frappe">Cafe Frappe  &#8377 99</li>
			<li data-cost="135" onclick="addCost(this)" data-name="Chocho Frappe">Chocho Frappe &#8377 135</li>
			
			<li data-cost="99" onclick="addCost(this)" data-name="Blushberry Frappe">Blushberry Frappe &#8377 99</li>
			<li data-cost="99" onclick="addCost(this)" data-name="Crushy Frappe">Crushy Frappe  &#8377 99</li>
			<li data-cost="99" onclick="addCost(this)" data-name="Snowy Vanila Frappe">Snowy Vanila Frappe  &#8377 99</li>
			
			</ul>
			</div>
          
        </div>
      
				</div>
				
		<div class="variety">
        <div class="item row"> 
          <div class="menu head">
            <p class="title">Coffee Topups</p>
          </div>
         </div>
        <div class="description row">
          
          <div class="menu sub">
            <ul class="menu">

          	<li data-cost="30" onclick="addCost(this)" data-name="Chocolate Sauce">Chocolate Sauce  &#8377 30</li>
          	<li data-cost="30" onclick="addCost(this)" data-name="Ice-Cream Scoop">Ice-Cream Scoop  &#8377 30</li>

          	<li data-cost="100" onclick="addCost(this)" data-name="Bloody Mary">Bloody Mary  &#8377 100</li>
          	<li data-cost="50" onclick="addCost(this)" data-name="Blue Lagoon">Blue Lagoon  &#8377 50</li>
			</ul>
			</div>
          
        </div>
      </div>

		
		<div class="variety">
        <div class="item row"> 
          <div class="menu head">
            <p class="title">Sandwiches</p>
          </div>
         </div>
        <div class="description row">
          
          <div class="menu sub">
            <ul>
            	<li data-cost="75" onclick="addCost(this)" data-name="Pasta Roll">Pasta Roll  &#8377 75</li>
            		<li data-cost="85" onclick="addCost(this)" data-name="Corn & Spinach Sandwich">Corn & Spinach Sandwich  &#8377 85</li>
            			<li data-cost="90" onclick="addCost(this)" data-name="Tex-Mex-Veg Sandwich">Tex-Mex-Veg Sandwich  &#8377 90</li>
            				<li data-cost="70" onclick="addCost(this)" data-name="Chicken Sandwich">Chicken Sandwich  &#8377 70</li>
            					</ul>
			</div>
          
        </div>
      </div>
      </div>

		
	</div> 
	
	<div id="submitOrder">
		<div id="total">
		<form id="form1" method="POST" action="orderSubmit.php">
		<a style="width:20px">Total: </a><br>
		<input type=text id="sumcash" name="cash"></input>
	</div>
		<button id="submitButton" type="submit" >-Submit Order-</button>
        <br style="clear:both">
		
		
		
		<script>
			
				$('#submitButton1').click(function(){
					$('#order').toggle();
				});
			
		</script>
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
	<script src="js/store-cash.js"></script>
	<script>	
	/*<div id="ordername">
	<input type=text id="name1" name="cash"></input>
	</div>
	</div>

	var sum=0;
				var x="";
	function addCost(dish){
		var temp = dish.getAttribute("data-cost");
		sum=sum+parseInt(temp);
		document.getElementById("sumcash").value = sum;
		var cost=[];
		cost.push(temp);
		
		var name=[];
		var temp1=dish.getAttribute("data-name");
		name.push(temp1);
		var totalOrder=[];
		for(var i=0;i<name.length;i++){
		totalOrder[i]=name[i]+" " +cost[i];
		
		//document.getElementById("name1").value = x;
		}
		for(var j=0;j<totalOrder.length;j++){
			x=x+"\n"+totalOrder[j];
			alert(x);
			
		}
		document.getElementById("name1").value = x;
	}*/
	</script>
	<?php
/*<button id="submitButton1" style="position:relative,top:500px" >-View Order-</button>
		<div id="order1" hidden></div>
*/	
	//$sum="<script>document.write(sum)</script>"; 
	//echo $sum;
	?>
</body>

</html>