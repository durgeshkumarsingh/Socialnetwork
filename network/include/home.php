<?php
include("dbconnection.php");
if(!isset($_SESSION['user_id'])){
header('Location:index.php');
}
?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Welcome</title>
		<link rel="stylesheet" type="text/css" href="css/home.css"/>
		</head>
		<body>
			<div id='wrapper'>
		<div id='header'><!--start header-->
		<?php include ("include/header.php");?>
		</div><!--end header-->
		
			<div id='maincontent'><!-- main content-->
				<div id=left>
					<div id='profilepic'>
					<div id='pro-hover'>
						<span class='ProfileImage'></span>
					<div id='editprofile'><span id='changepic'>Change Profile Pic</span></div>
						<div id='upload-profilepic'>
							<form enctype='multipart/form-data' id='ProfilePic' method='POST' action='image.php'>
								<input type='file' name='Profilepic'/>
								<input type='submit' value ='Save' id='saveNewPic' class='btnupload'/>
							</form>
						</div>	
					<div id='editoption'>
						<ul>
							<li id='uploadpic'><small>Upload Photo</small></li>
						</ul>
					</div>
					</div>
					</div>
					<div>
						
						<h3>User Information <a href='edit.php'>Edit</a></h3><br><?php require'showuserinfo.php';?>
					</div>
				</div>
				<div id="right"><!--start right content-->
					<div id="r1">
					<textarea rows=5 cols=94 id="wom" placeholder="What's on your mind.." ></textarea>
					</div>
				</div><!--end right content-->
			</div><!-- main content-->
		</div><!--end wrapper)-->
</body>
</html>
<?php
				if(isset($_GET['remarks'])){
				$remarks=$_GET['remarks'];
				if ($remarks=='success')
				{
				?>
				<h1 id="mark"><?php echo 'password changed success ';?></h1>
				<?php
				}}
				?>
