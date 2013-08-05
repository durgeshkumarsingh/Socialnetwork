<?php
session_start();
	$serverName="localhost";
	$dbUsername="root";
	$dbPassword="";
	$dbName="NETWORK";
	
	mysql_connect($serverName,$dbUsername,$dbPassword) or die('database Connection Issue');
	mysql_select_db($dbName);
	
?>
<?php
function generateHash($pass) 
{
		
        return md5($pass);
}

?>
