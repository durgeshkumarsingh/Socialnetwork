



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
								<span style="margin-top:1%;"><?php  include_once 'picsave.php';?></span>
								</div>
							
						</div>
						<div id="information">
							<h3 id="info">Information<a href='editusinfo.php?w=150'style='margin-left:25%;'>Edit</a></h3><?php require'showuserinfo.php';?>
						</div>
					</div>
					<div id="right2">
						<span id='updatestatus'>Search Result</span>
							<span id='uploadphotos'></span>
						
						
						<div id="rest">
							
							<div id="pview"> <?php
include_once 'dbconnection.php';
if(isset($_GET['sbtn']))
{
$sch=$_GET['srch'];
$sql=("Select * from SOCIAL where CONCAT( Fname,  ' ', Lname ) LIKE  '%$sch%'");
$result=  mysql_query($sql);
if(mysql_num_rows($result)>0)
{
while($row= mysql_fetch_array($result))
{
    $nam=$row['Fname'];
    $nam1=$row['Lname'];
echo "<a href='otherprofile.php?m=".$row['User_Id']."'><img src='upload/".$row['Image']."' width='50' height='50'>".$nam." ".$nam1."</a><br/>";

}
}
else
{
	echo "No match found";
}
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
