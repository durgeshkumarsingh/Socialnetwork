<?php
require 'dbconnection.php';
if(isset($_REQUEST['login']) ||$_REQUEST['auto']==1){
	$email=mysql_real_escape_string($_REQUEST['email']);
	$pass=generateHash(mysql_real_escape_string($_REQUEST['pwd']));
	if($_REQUEST['loginchk']==1){
         setcookie('email',$email,time()+3200);   
         setcookie('pass',$pass,time()+3200);
     }
     if($_REQUEST['auto']==1){
        $email = $_COOKIE['email'];
        $pass  = $_COOKIE['pass'];
    }
	$sql="SELECT User_Id,Email_Id, Password FROM SOCIAL WHERE Email_Id='$email' and Password='$pass'";
	$result=mysql_query($sql);
	$rws=mysql_fetch_array($result);
	if($email==$rws['Email_Id'] && $pass==$rws['Password']){
		$_SESSION['user_id']=$rws['User_Id'];
		
		header('Location:home.php');
	}
	else
	{	
		setcookie('email',$email,time()-3200);   
        setcookie('pass',$pass,time()-3200);
		header('Location:index.php?remarks=unsuccess1');
	
}
}
?>
		
