<?php
require 'dbconnection.php';
	if(isset($_REQUEST['submit'])){
		$_SESSION['fname']=$_REQUEST['fname'];
		$_SESSION['lname']=$_REQUEST['lname'];
		$_SESSION['pwd']=generateHash($_REQUEST['pwd']);
		$_SESSION['repwd']=generateHash($_REQUEST['repwd']);
		$_SESSION['mo']=$_REQUEST['mo'];
		$_SESSION['email']=$_REQUEST['email'];
		$DOB=$_POST['year']."-".$_POST['month']."-".$_POST['day'];
		$_SESSION['dob']=$DOB;
		$_SESSION['gender']=$_POST['gender'];
		$pic='default.gif';
	}
?>

<!DOCTYPE HTML>
<html>
<head>
	<link rel='stylesheet' type='text/css' href='css/style.css'/>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/indexscript.js"></script>
	<script type="text/javascript" src="js/image.js"></script>
	<script type="text/javascript" src="js/abc.js"></script>
	<link rel="stylesheet" type="text/css" href="1-simple-calendar/tcal.css" />
	<script type="text/javascript" src="1-simple-calendar/tcal.js"></script> 

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
			<div class='div-register1'>
			<div id='op'>
				<form id='Registration_form' name="fform" action="registration.php"  onsubmit="return checkForm(fform)" method="POST">
				<select style='font-size:20px;margin-left:8px;text-align:center;' name="question" >
					<option>Question</option>
					<option>your mobile no</option>
					<option>your date of birth</option>
					<option>your favourte subject</option>
					<option>your first class teacher name</option>
					<option>your first dating place</option>
				</select>
				<br><br>
				<div>
					<input type="text" name='ans' placeholder="enter your answer">
				</div>
				<div>
					<button type="submit" name="submit1" id="buttonr"value="Register">Register</button>
				</div>
				</form>
				</div>
			</div><!--end right--->
		</div><!--end center-->
		<div id="foo"><!--footer-->
			<nav>
				<hr>
				<ul>	
					<li><a href="index.php">Home</a></li>
					<li><a href="Aboutus.php">About Us</a></li>
					<li><a href="contactus.php">Contect Us</a></li>
					<li><a href="#">Team Members</a></li>
				</ul>
			</nav>
			</div>
	</div><!--end wrapper-->
</body>

</html>
