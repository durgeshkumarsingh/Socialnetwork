<?php
include_once("dbconnection.php");
if(!isset($_SESSION['user_id'])){
header('Location:index.php');
}
if(isset($_GET['m']))
{
	$_SESSION['m']=$_GET['m'];
}
?>
<html>
	<head>
		<title>Welcome</title>
		<link rel="stylesheet" type="text/css" href="css/home.css">
		<script type="text/javascript" src="scripts/jquery.min.js"></script>
		<script type="text/javascript" src="scripts/jquery.form.js"></script>
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
								<span style="margin-top:1%;">
					<? include_once 'picsave_o.php'; ?>
								</span>
								</div>
								
						</div>
						<div id="information">
							<h3 id="info">Information</h3><?php require'showuserinfo_o.php';?>
						</div>
					</div>
					<div id="right2">
						<p id='updatestatus'>Update Status</p>
							<span id='uploadphotos'></span>
						<div id='update'>
						<form name="dispatches" action="postdispach.php" method="post">
						<textarea rows="3" cols="80" placeholder="What's on your mind......"name="dispatch"></textarea>
						<br></br><input id="postbtn" type="submit" value="Post"></input></form>
						</div>
						
						<div id="rest">
							
							<div id="pview"><? include 'postview_o.php'; ?></div>
							</div>
					</div>
					<div id="right1">
					</div>
									
				</div><!--End main content-->
			</div><!--End wrapper-->
		</body>
</html>
