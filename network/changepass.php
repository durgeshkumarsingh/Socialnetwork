<?php
require 'dbconnection.php';
$user_id= $_SESSION['user_id'];
?>
<html>
	<head>
		<title>Welcome</title>
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<script type="text/javascript" src="scripts/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.form.js"></script>
		<script type="text/javascript" src="js/abc.js"></script>
		<script type="text/javascript" >$(document).ready(function(){$('#photoimg').live('change', function(){ 
			    $("#preview").html('');$("#preview").html('<img src="loader.gif" alt="Uploading...."/>');
				$("#imageform").ajaxForm({target: '#preview'}).submit();});}); 
		</script>
		</head>
		<body>
			<div id="wrapper">
				<?php include ("include/header.php");?>
			<div id="maincontent">
					<div id="left1">
					</div>
					<div id="left2">
						<div id="propic">
							<div id="picdis">
								<span style="margin-top:1%;"><?php include_once 'picsave.php'; ?></span>
								</div>
								<div id="upld">
							<form id="imageform" method="post" enctype="multipart/form-data" action='image2.php'>
								 <br/>
								<input  type="file" size=13 name="photoimg" id="photoimg" /><br/><br/>
							</form>
							</div>	
						</div>
						<div id="information">
							<h3 id="info">Information<a href='editusinfo.php?w=150' style='margin-left:25%;'>Edit</a></h3><?php require'showuserinfo.php';?>
						</div>
					</div>
					<div id="right2">
				<?php
				if(isset($_GET['remarks'])){
				$remarks=$_GET['remarks'];
				if ($remarks=='success')
				{
				?>
				<script>alert('<?php echo 'Password Changed';?>')</script>
				<?php
				}
				if ($remarks=='success1')
				{
				?>
				<script>alert('<?php  echo 'The submitted current password doesn\'t match your real current password';?>')</script>
				<?php
				}
				if ($remarks=='success2')
				{
				?>
				<script>alert('<?php  echo 'New password and the confirmation don\'t match';?>')</script>
				<?php
				}
				if ($remarks=='success3')
				{
				?>
				<script>alert('<?php  echo 'The new password matches the current password';?>')</script>
				<?php
				}}
			?>

						<div id="passchange" style="margin-top:12%;">
							<h2>CHANGE PASSWORD</h2>
							<form id='Registration_form' name="fform" action="changepassprocess.php"  onsubmit="return checkForm(fform)" method="POST">
							<input id="currpass" type="password" placeholder="Current Password"name="oldpass"><br/>
							<input id="newpass" type="password" placeholder="New Password"name="pwd"><br/>
							<input id="connewpass"placeholder="Confirm New Password" type="password" name="repwd"><br/>
							<input id="submit" name="submit" type="submit" value="Submit">
							</form>
						</div>
					</div>
					<div id="right1">
					</div>			
				</div><!--End main content-->
			</div><!--End wrapper-->
		</body>
</html>
	
