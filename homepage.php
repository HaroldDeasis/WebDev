<head>
<link href = "homepage.css" rel = "stylesheet" type = "text/css"/>
<title> PUP Clothing Line - Online Store </title>
<link rel = "shortcut icon" type = "img/ico" href = "img/favicon.ico"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
<!---<div class = "Container">-->

<div class = "Banner"></div>

<div class = "Menu">
	<ul class = "_menu">
		<li class = "_menulist"><a class = "_menulink" href="homepage.php">HOME</a></li>
		<li class = "_menulist"><a class = "_menulink" href="about.php">ABOUT</a></li>
		<li class = "_menulist"><a class = "_menulink" href="contact.php">CONTACT</a></li>
		<li class = "_menulist"><a class = "_menulink" href="faq.php">FAQ</a></li>
		
	</ul>
</div>

<div class = "SideShop">
	<h1 class = "_sideshopheader">SHOP</h1>
	<ul class = "_sideshop">
		<li class = "_sideshoplist"><a class = "_sideshoplink" href="accessories.php">ACCESSORIES&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</a></li>
		<li class = "_sideshoplist"><a class = "_sideshoplink" href="tshirts.php">SHIRTS</a></li>
		<li class = "_sideshoplist"><a class = "_sideshoplink" href="jackets.php">JACKETS</a></li>
		<li class = "_sideshoplist"><a class = "_sideshoplink" href="caps.php">CAPS</a></li>
		<li class = "_sideshoplist"><font class = "_sideshoplink">&nbsp</font></li> <!-- SPACE FOR LOGIN -->
		<li id="login_button" class = "_sideshoplist"><a class = "_sideshoplink" href=#>LOGIN</a></li>
	</ul>
</div>

<div class = "_gif">
			
</div>

<div class = "MainBody">
	<h1 style = "font-family: Cooper Black; margin: 35px;"> FEATURED ITEMS </h1>
	<div class = "_homeitems">
		<ul class = "_productsrow1">
			<li class = "_prodlist"><img class = "_imgproducts" src = "img/tshirt1.jpg">
			<li class = "_prodlist"><img class = "_imgproducts" src = "img/tshirt2.jpg">
			<li class = "_prodlist"><img class = "_imgproducts" src = "img/tshirt3.jpg">
		</ul>
		<ul class="_productsrow1">
			<li class = "_prodlist"><font class="_proddesc">GALING PUP <br> P150.00</font></li>
			<li class = "_prodlist"><font class="_proddesc">LON SHIRT 1 <br> P150.00</font></li>
			<li class = "_prodlist"><font class="_proddesc">LON SHIRT 2 <br> P150.00</font></li>
		</ul>
		<ul class = "_productsrow1">
			<li class = "_prodlist"><img class = "_imgproducts" src = "img/jacket1.jpg">
			<li class = "_prodlist"><img class = "_imgproducts" src = "img/jacket2.jpg">
			<li class = "_prodlist"><img class = "_imgproducts" src = "img/jacket3.jpg">
		</ul>
		<ul class="_productsrow1">
			<li class = "_prodlist"><font class="_proddesc">ISKOLAR'S JACKET <br> P250.00</font></li>
			<li class = "_prodlist"><font class="_proddesc">PUP JACKET <br> P250.00</font></li>
			<li class = "_prodlist"><font class="_proddesc">PUP 1904 JACKET <br> P250.00</font></li>
		</ul>
		
		<ul class = "_productsrow1">
			<li class = "_prodlist"><img class = "_imgproducts" src = "img/acce1.jpg">
			<li class = "_prodlist"><img class = "_imgproducts" src = "img/acce2.jpg">
			<li class = "_prodlist"><img class = "_imgproducts" src = "img/acce3.png">
		</ul>
		<ul class="_productsrow1">
			<li class = "_prodlist"><font class="_proddesc">PUP ECO BAG <br> P75.00</font></li>
			<li class = "_prodlist"><font class="_proddesc">PUP TUMBLR <br> P100.00</font></li>
			<li class = "_prodlist"><font class="_proddesc">PUP BAG TAG <br> P50.00</font></li>
		</ul>
	</div>
</div>

<div class = "Footer">
	<h1 class = "_footerheader">Submit design:</h1>
	<ul class = "_footersubmit">
		<li class = "_footersubmitlist1"><a class = "_iconlinks"href = "fb.com/prodiejhay"><img src = "img/fbicon.ico" height = "50px" width = "50px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </a></li>
		<li class = "_footersubmitlist"><a class = "_iconlinks"href = "fb.com/prodiejhay"><img src = "img/twittericon.ico" height = "50px" width = "50px">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp </a></li>
		<li class = "_footersubmitlist"><a class = "_iconlinks"href = "fb.com/prodiejhay"><img src = "img/instaicon.ico" height = "50px" width = "50px"> </a></li>
	</ul>
	<p class = "_footercopyright">Copyright 2018<br>All rights reserved. Powered by: <b>PUP Clothing Line</b></p>
</div>





<!-- --------------------------------------Login Modal!-------------------------------------- -->
<div id="login" class="modal">

  <!-- Modal content -->
  <div class="modal-content">
    <span class="close">&times;</span>
	<center><img src= "img/logo.png" class= "avatar">
    <h1>Login</h1></center>
	<div class = "login-box">
					<p>Username</p>
					<input type="text" name="username" placeholder="Enter Username">
					<p>Password</p>
					<input type= "password" name="password" placeholder="Enter Password">
					<input type= "submit" name="login" value="Login">
					<br><br>
					<font size=3px class="pointer" id="regbut">Register Here.</font>
	</div>
  </div>

</div>

<!-- The Modal -->
<div id="regi" class="reg">

  <!-- Modal content -->
  <div class="reg-content">
    <span class="closereg">&times;</span>
	<center><img src= "img/logo.png" class= "avatar">
    <h1>Registration</h1></center>
   <div class = "registration">
					<p>First Name:</p>
					<input type = "text" name="txtfname" placeholder="First Name"><br>
					<p>Last Name:</p>
					<input type = "text" name="txtlname" placeholder="Last Name"><br>
					<p>Username:</p>
					<input type = "text" name="txtusername" placeholder="Username"><br>
					<p>Password</p>
					<input type = "password" name="txtpassword" placeholder="Password"><br>
					<p>Mobile Number:</p>
					<input type = "text" name="txtcontact" placeholder="Mobile Number"><br>
					<p>Gender</p>
					<input type = "text" name="txtgender" placeholder="Male/Female"><br>
					<input type= "submit" name="register" value="Register">

	</div>
  </div>

</div>

<script>
// Get the modal
var modal = document.getElementById('login');

// Get the button that opens the modal
var btn = document.getElementById("login_button");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
	document.body.style.overflow = "hidden";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
	document.body.style.overflow = "show";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
		document.body.style.overflow = "show";
    }
}

<!-- REGISTRATION MODAL -->

// Get the modal
var reg = document.getElementById('regi');

// Get the button that opens the modal
var btn1 = document.getElementById("regbut");

// Get the <span> element that closes the modal
var span1 = document.getElementsByClassName("closereg")[0];

// When the user clicks the button, open the modal 
btn1.onclick = function() {
	modal.style.display = "none";
    reg.style.display = "block";
	document.body.style.overflow = "hidden";
}

// When the user clicks on <span> (x), close the modal
span1.onclick = function() {
    reg.style.display = "none";
	document.body.style.overflow = "show";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == reg) {
        reg.style.display = "none";
		document.body.style.overflow = "show";
    }
}
</script>



<!--</div>-->
</body>
