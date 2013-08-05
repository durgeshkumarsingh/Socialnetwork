<?php
require 'dbconnection.php';
$user_id= $_SESSION['user_id'];
if (isset($_REQUEST['submit'])){
	$currpass = generateHash(mysql_real_escape_string($_POST['oldpass']));
	$newpass = generateHash(mysql_real_escape_string($_POST["pwd"])); 
	$connewpass = generateHash(mysql_real_escape_string($_POST["repwd"]));
	$q = mysql_query("SELECT User_Id, Password FROM SOCIAL WHERE User_Id='$user_id'");
	$r = mysql_fetch_assoc($q);
	$pass = $r["Password"];
	if(($newpass!=$pass)||($connewpass!=$pass)){
		if($connewpass==$newpass){
            if($currpass==$pass){
                mysql_query("UPDATE SOCIAL SET Password='$newpass' ,Repassword='$newpass' WHERE User_Id='$user_id'");
                header('location:changepass.php?remarks=success');
             }else {
				  header('location:changepass.php?remarks=success1');
               
				}
        }else {
			 header('location:changepass.php?remarks=success2');
       
        }
    }else {
		 header('location:changepass.php?remarks=success3');
      
	}
}
?>
