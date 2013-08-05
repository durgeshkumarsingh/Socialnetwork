<?php
include_once("dbconnection.php");
if(!isset($_SESSION['user_id'])){
header('Location:index.php');
}
if(isset($_GET['y']))
{
	if($_GET['y']==1)
	{
		echo "<script>alert('You have already liked this post..')</script>";
	}
	if($_GET['y']==2)
	{
		echo "<script>alert('Only liked posts can be unliked..')</script>";
	}
}
?>
<html>
	
	<head>
		<title>Welcome</title>
		<!--<script type="text/javascript" src="http://ajax.googleapis.com/ajax/
libs/jquery/1.3.0/jquery.min.js"></script>
<script type="text/javascript">
var auto_refresh = setInterval(
function ()
{
$('#rest').load('postview.php').fadeIn("slow");
}, 10000); // refresh every 10000 milliseconds
</script>-->
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
								
						</div>
						<div id="information" style="margin-top:-10%;">
							<h3 id="info">Information<a href='editusinfo.php?w=150'style='margin-left:25%;'>Edit</a></h3><?php require'showuserinfo.php';?>
						</div>
					</div>
					<div id="right2">
						<span id='updatestatus'>Update Status</span>
							<span id='uploadphotos'></span>
						<div id='update'>
						<form name="dispatches" action="postdispach.php" method="post">
						<textarea rows="3" cols="20"  placeholder="What's on your mind......"name="dispatch" required></textarea>
						
						<br></br><input id="postbtn" type="submit" value="Post"></input></form>
						<hr>
						</div>
						
						<div id="rest">
							
							<div id="pview">
							<?php
include_once("dbconnection.php");
$sql=("SELECT * FROM  messages where User_Id='".$_SESSION['user_id']."' and id='".$_GET['x']."'");
$result=mysql_query($sql);
if(mysql_num_rows($result)>0)
//start
{
	
while($fetch=mysql_fetch_array($result))
{
	
echo "<div style='margin-right:5px;'><a href='otherprofile.php?m=".$fetch['User_Id']."'><img src='upload/".$fetch['Image']."' height='50' width='50'></a></div>";
echo "<div style='float:left; margin-left:55px;margin-top:-45px;'><a href='otherprofile.php?m=".$fetch['User_Id']."'><b>".$fetch['Name']." </b></a>";
echo "<div style='margin-left:500px; margin-top:-20px;'><a href='vote.php?a=1 && b=".$fetch['id']."'><img src='images/buttonsfeat1.jpg' ></a>";

$sql6="Select * from votes where msgid='".$fetch['id']."'";
$res6=mysql_query($sql6) or die(mysql_error());
$numv=mysql_num_rows($res6);
echo "<span style='background:black;'> ".$numv." </span>";
echo "<a href='vote.php?a=2 && b=".$fetch['id']."'><img src='images/buttonsfeat2.jpg' ></a></div>";
echo "";
echo nl2br($fetch['content'])."</div>";
echo "<div style='margin-left:55px;'><form action='commentin.php?n=".$fetch['id']."'  method='post'>";
echo "<textarea style='resize: none;  width: 50%; height: 4%; border: 1px solid #8b9dc3;' name='cmnt' placeholder='Write a comment..' ></textarea><br/><input type='submit' 
	style='cursor:pointer;
	font-weight:bold;
    margin-top:2px;
    border: 1px solid #426A57;
    background-color:#426A57;
    color:#FFFFFF;' 
    name='cmntbtn' value='comment'></form></div>";
    
$sql1="SELECT * FROM comment order by c_id desc";
$result1=mysql_query($sql1) or die(mysql_error());
while($fetch1=mysql_fetch_array($result1))
{
if($fetch['id']==$fetch1['msgid'])
{
	$sql2="SELECT User_Id,Fname,Lname,Image from SOCIAL where User_Id='".$fetch1['User_Id']."'";
	$result2=mysql_query($sql2) or die(mysql_error());
	$fetch2=mysql_fetch_array($result2);
	
	echo "<div><div style='margin-left:60px;'><a href='otherprofile.php?m=".$fetch2['User_Id']."'><img src='upload/".$fetch2['Image']."' width=30 height=30></div><div style='margin-left:94px; margin-top:-33px;'>".$fetch2['Fname']." ".$fetch2['Lname']."</a> <br/>".$fetch1['comment']."<hr></div>";
}
else
{
	echo "";
}
}



}
echo "";
}
//end
else
{
	echo "No post";
}
?>


							</div>
							</div>
					</div>
					<div id="right1">
					</div>
									
				</div><!--End main content-->
			</div><!--End wrapper-->
		</body>
</html>

