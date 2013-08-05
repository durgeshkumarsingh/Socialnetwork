

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
						<p id='updatestatus'>Update Status</p><p id="see"><a href="seeallmembr.php">All Members</a></p>
							<span id='uploadphotos'></span>
						<div id='update'>
						<form name="dispatches" action="postdispach.php" method="post">
						<textarea rows="3" cols="80" placeholder="What's on your mind......"name="dispatch" id='text1' ></textarea>
						<br><br><input id="postbtn" type="submit" value="Post"></input></form>
					
						</div>
						
						<div id="rest">
							
							<div>
							<div id="pview">
								<?php
								require_once 'dbconnection.php';
								$query="SELECT * FROM SOCIAL";
								$result=mysql_query($query);
								while($fetch=mysql_fetch_array($result)){
								$Name=$fetch['Fname'].$fetch['Lname'];
									echo "<div style='margin-left:60px;'><a href='otherprofile.php?m=".$fetch['User_Id']."'>
									<img src='upload/".$fetch['Image']."' height='90' width='90'>
									</div><p><div style='margin-left:164px;margin-top:-30px;'><strong>".$Name.":  </strong></a></div>";
									}
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
