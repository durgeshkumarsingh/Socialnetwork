<?php
require 'dbconnection.php';
if(isset($_SESSION['user_id']))
	header('Location:home.php');
?>
<!DOCTYPE HTML>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='css/style.css'/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/indexscript.js"></script>
	<script type="text/javascript" src="js/image.js"></script>
	<title>TRANING SOCIAL</title>
</head>
<body>
	<div class='wrapper'>
		<div class='header'>
			<div id="logo"><a href='index.php'><span class='span'>SOCIAL LOGO</span></a></div>
				
		</div><!--end  header-->
		<div class='center'>
			<div class='left'><!--start left-->
				<div id="slideshowContainer">
					<div class="slideshow"> 
						<img src="images/image1.png" width="600" height="300" /> 
						<img src="images/image2.png" width="600" height="300" /> 
						<img src="images/image3.png" width="600" height="300" /> 
						<img src="images/image4.png" width="600" height="300" /> 
						<img src="images/image5.png" width="600" height="300" /> 
					</div>
					<ul id="nav1">
						<li id="prev"><a href="#">Previous</a></li>
						<li id="next"><a href="#">Next</a></li>
					</ul>
				</div>	
			</div><!--end left-->
			<div class='div-register'>
				<h3 class='Newuser1'><span><b style='font-size: 52px;'>C</b>ontact <b style='font-size: 52px;'>U</b>s</span> <br/> </h3>
				<div>
					<div>
						<p id='hi'><img src='images/1372832592.jpg' width='100'height='100'></p><h4>DURGESH KUMAR SINGH </h4>dksingh00089@gmail.com
						<br><a href='https://www.facebook.com/durgeshkumar.singh2?ref=tn_tnmn'><img src='images/flo.jpg'width='30'height='30'></a>
						<p class='name'><img src='images/qd.jpg' width='100'height='100'></p><h4 class='name1'>ABDUL QADIR</h4><p class='name1'>akd@gmail.com</p>
						<p class='name1'><a href=''><img src='images/flo.jpg' width='30' height='30'></a></p>
					</div>
					<br>
					<br>
					<br>
					<br>
					<br>
					<br>
					
					<div>
						<p id='hi1'><img src='images/sb.jpg' width='100'height='100'></p><h4>KUMAR SHIVAM</h4>kumar.shivam433@gmail.com
						<br><a href='https://www.facebook.com/durgeshkumar.singh2?ref=tn_tnmn'><img src='images/flo.jpg'width='30'height='30'></a>
						<p class='name'><img src='images/vk.jpg' width='100'height='100'></p><h4 class='name1'>VIKASH KUMAR</h4><p class='name1'>kumar_vikash555@yahoo.com</p>
						<p class='name1'><a href=''><img src='images/flo.jpg' width='30' height='30'></a></p>
					</div>
				</div>
			</div><!--end right-signup-->
		</div><!--end center-->
		<div id="foo"><!--footer-->
			<nav>
				<hr>
				<ul>	
					<li><a href="index.php">Home</a></li>
					<li><a href="Aboutus.php">About Us</a></li>
					<li><a href="Contactus.php">Contect Us</a></li>
					<li><a href="#">Team Members</a></li>
				</ul>
			</nav>
			</div>
	</div><!--end wrapper-->
</body>

</html>

