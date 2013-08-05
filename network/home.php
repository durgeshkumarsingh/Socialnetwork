<?php
include_once("dbconnection.php");
if(!isset($_SESSION['user_id'])){
header('Location:index.php');
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
								<span style="margin-top:1%; "><?php  include_once 'picsave.php';?></span>
								</div>
								<!--<div id="upld">
							<form id="imageform" method="post" enctype="multipart/form-data" action='image2.php'>
								 <br/>
							<input type="file" size=13 name="photoimg" id="photoimg" /><br/>
							
							</form>
						<form action="" method="post">
								<input type="submit" name="savepic" value="save">
								</form>
							</div>-->
						</div>
						<div id="information">
							<h3 id="info">Information<a href='editusinfo.php?w=150'style='margin-left:25%;color:black;'>Edit</a></h3><?php require'showuserinfo.php';?>
						</div>
					</div>
					<div id="right2">
						<p id='updatestatus'>Update Status</p>

						<div id='update'>
						<form name="dispatches" action="postdispach.php" method="post">
						<textarea rows="3" cols="80" placeholder="What's on your mind......"name="dispatch" id='text1' ></textarea>
						<br><br><input id="postbtn" type="submit" value="Post"></input></form>
					
						</div>
						
						<div id="rest">
							
							<div>
							<div id="pview">
								<?php require'postview.php';
								?>
								</div>
							</div>
							<div>
					</div>
					<div id="right1">
					</div>
									
				</div><!--End main content-->
			</div><!--End wrapper-->
		</body>
</html>
<?php
if(isset($_GET['remarks']))
{
if($_GET['remarks']=='unsuccess1')
{
echo "<script>alert('You have already liked this post..')</script>";
}
if($_GET['remarks']=='unsuccess2')
{
echo "<script>alert('Only liked posts can be unliked..')</script>";
}
}
?>						
