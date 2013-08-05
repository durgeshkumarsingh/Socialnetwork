<?php
include("dbconnection.php");
$postid=$_GET['n'];
$msgrid=$_GET['m'];
$cmnt=$_POST['cmnt'];
$user_id = $_SESSION['User_Id'];
$image=$_SESSION['propic'];
$user_name=$_SESSION['Fname']." ".$_SESSION['Lname'];
$time=$SESSION['timestamp'];
$sql = "INSERT INTO comment values('','$postid','$cmnt','$user_id','$msgrid','$user_name','$image','$time')";	
	$result=mysql_query($sql) or die("Unable to insert your status into db");
	header("location: home.php");

?>

