<?php
require 'dbconnection.php';
$sql=("update SOCIAL set Password='".generateHash($_POST['pwd'])."',Repassword='".generateHash($_POST['repwd'])."'where Email_Id='".$_SESSION['email']."'");
	$res=mysql_query($sql);
	
	header("location:index.php?remarks=passchngd");

?>
