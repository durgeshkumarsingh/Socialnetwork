<?php
include_once("dbconnection.php");
$uid= $_GET['uid'];
$msgid=$_GET['d'];
$sql1="SELECT * FROM messages where id='$msgid' and User_Id='$uid'";
$result1=mysql_query($sql1);
if(mysql_num_rows($result1)>0)
{
$sql="DELETE FROM messages where id='$msgid' and User_Id='$uid'";
mysql_query($sql) or die(mysql_error());
$sql2="DELETE FROM comment where msgid='$msgid'";
mysql_query($sql2);
header('Location:home.php');
}
else
{
	header('Location:home.php?cnd=1');
}

?>
