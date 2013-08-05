<?php
include_once 'dbconnection.php';
if($_GET['a']==1)
{
$sql="select * from votes where msgid=".$_GET['b']." and User_Id=".$_SESSION['User_Id']."";
$result=mysql_query($sql) or die(mysql_error());
$num=mysql_num_rows($result);
if($num==0)
{
	$sql1="insert into votes values('','".$_SESSION['User_Id']."','".$_GET['b']."')";
	$result1=mysql_query($sql1) or die(mysql_error());
	header('Location:home.php');
}
else
{
	header('Location:home.php?remarks=unsuccess1');
}
}
if($_GET['a']==2)
{
$sql="select * from votes where msgid=".$_GET['b']." and User_Id=".$_SESSION['User_Id']."";
$result=mysql_query($sql) or die(mysql_error());
$num=mysql_num_rows($result);
if($num==0)
{
	header('Location:home.php?remarks=unsuccess2');
}	
else
{
	$sql2="DELETE FROM votes where msgid='".$_GET['b']."' and User_Id='".$_SESSION['user_id']."'";
	$result2=mysql_query($sql2);
	header('Location:home.php');
}
}
?>
