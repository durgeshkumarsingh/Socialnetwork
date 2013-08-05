<?php
$month=array('1'=>'Jan','2'=>'Feb','3'=>'March','4'=>'April','5'=>'May','6'=>'June','7'=>'July','8'=>'Aug','9'=>'Sept','10'=>'Oct','11'=>'Nov','12'=>'Dec');
require 'dbconnection.php';
		$user_id=$_SESSION['user_id'];
		$_SESSION['w']=$_GET['w'];
		$sql = "SELECT * FROM SOCIAL WHERE User_Id='$user_id'";
		$rws = mysql_fetch_array(mysql_query($sql));
		$d=$rws['DOB'];
		$do=new DateTime($d);
		$day=date_format($do,'d');
		$mont=date_format($do,'m');
		$year=date_format($do,'Y');
		if(isset($_REQUEST['submit']))
		{
		$Fname=$_REQUEST['fname'];
		$Lname=$_REQUEST['lname'];
		$Mobile=$_REQUEST['mo'];
		$Email_Id=$_REQUEST['email'];
		$mnth=new DateTime($_POST['mnt']);
		$mnthf=date_format($mnth,'m');
		$DOB=$_POST['year']."-".$mnthf."-".$_POST['day'];
		$gender=$_POST['gender'];
		$col=$_POST['col'];
		$sql = "UPDATE SOCIAL SET Fname='$Fname',Lname='$Lname',
		Email_Id='$Email_Id', DOB='$DOB',Mobile='$Mobile', Gender='$gender', College='$col' WHERE  User_Id='$user_id'";
		mysql_query($sql) or die(mysql_error());
		?>
		<h1 id="mark2"><?php echo "Information Updated Success.";?></h1>
		<?php
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
								<span style="margin-top:1%; margin-left:8%;"><?php  include_once 'picsave.php';?></span>
								</div>
								<div id="upld">
							<form id="imageform" method="post" enctype="multipart/form-data" action='image2.php'>
								 <br/>
							<input type="file" size=13 name="photoimg" id="photoimg" /><br/>
							
							</form>
						<form action="" method="post">
								<input type="submit" name="savepic" value="save" id='button'>
								</form>
							</div>
						</div>
						<div id="information">
							<h3 id="info">Information<a href='editusinfo.php?w=150'style='margin-left:25%;color:#000000;'>Edit</a></h3><?php require'showuserinfo.php';?>
						</div>
					</div>
					<div id="right2">
						
						<div id="passchange" style="margin-top:10px;">
						<h2 style="margin-left:10px;margin-top:10px;">UPDATE INFORMATION</h2>
					<form  name="fform" action=""  method="POST">
				
					<input type='text' name='fname' placeholder='Firstname' title="PLACE YOUR FIRST NAME" value='<?php echo $rws['Fname'];?>' id="firstName" required><br>
				
					<input type='text' name='lname'  placeholder='Lastname' title="PLACE YOUR LAST NAME" value='<?php echo $rws['Lname'];?>' id="laststName" required><br>
			
					<input type='mobile' name='mo' placeholder='Mobile No' title="PLACE YOUR MOBILE NO"maxlength="14" value='<?php echo $rws['Mobile'];?>' id="mobile" required><br>
			 	
					<input type='Email' name='email' placeholder='Email Id' title="PLACE YOUR EMAIL-ID" value='<?php echo $rws['Email_Id'];?>' id="email" readonly><br>
					<input type='text' name='col' placeholder='College Name' title="PLACE YOUR COLLEGE NAME " value='<?php echo $rws['College'];?>' id="col" ><br>
					
					<div id="dob" >Birthday</div>
						<div id="D0B">
						<select class="DOB" name="day" title="SELECT DAY" id="day" >
							<option selected="0" value="0">Day</option>
							<?php
							for($i=1;$i<=31;$i++)
							{
							echo "<option";
							if($i==$day)
							{
							echo " selected='selected'";
							}
							
							echo ">";
							echo $i;
							echo "</option>";
							}
							?>
						</select>
						<select class="DOB" name="mnt" title="SELECT MONTH" id="month" >
						<option selected="0" value="0">Month</option>
					
							<?php
							
							for($i=1;$i<=12;$i++)
							{
							echo "<option";
							if($i==$mont)
							{
							echo " selected='selected'";
							}
							
							echo ">";
							echo $month[$i];
							echo "</option>";
							}
							?>
							</select>
						
						<select class="DOB" name="year" title="SELECT YEAR" id='year' required >
						<option selected="0" value="0">Year</option>
							<?php
							for($i=1950;$i<=2013;$i++)
							{
							echo "<option";
							if($i==$year)
							{
							echo " selected='selected'";
							}
							
							echo ">";
							echo $i;
							echo "</option>";
							}
							?>
							</select>
							</div>
							<div id="gender"> 
								<table >
									<br>
									<tr >
								<td>Male</td><td><input required type="radio" name='gender' title="SELECT GENDER" <? if($rws['Gender']=='Male') { echo "checked='checked'";} ?> value="Male" ></td>
								<td>Female</td><td><input  required type="radio" name='gender' title="SELECT GENDER" <? if($rws['Gender']=='Femal') { echo "checked='checked'";} ?> value="Female"></td>
								</tr>
								
								</table>
								
							</div>
							<input type="submit" name="submit" id="button"value="Update">
						</div>
						</div>
				</form>
					<div id="right1">
					</div>
									
				</div><!--End main content-->
			</div><!--End wrapper-->
		</body>
</html>
