<?php
require 'dbconnection.php';
	
if(isset($_COOKIE['email']) && isset($_COOKIE['pass']))
{
         setcookie('email',$email,time()-3200);   
         setcookie('pass',$pass,time()-3200);
  }
  session_destroy();
	header('Location:index.php');

?>

