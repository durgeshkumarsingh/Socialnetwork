<?php
include_once("dbconnection.php");
$cid=$_GET['cid'];
$ss=$_SESSION['user_id'];
$sql1="select * from comment where c_id='$cid' and (User_Id='$ss' or msgposterid='$ss')";
$result=mysql_query($sql1);
if(mysql_num_rows($result))
{
$sql="delete from comment where c_id='$cid' and (User_Id='$ss' or msgposterid='$ss')";
mysql_query($sql);
header('Location:home.php');
}
else
{
	header('Location:home.php?cnd=2');
}

?>
