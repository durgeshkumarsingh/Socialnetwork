<?php
include_once('dbconnection.php');

$result=mysql_query("SELECT Image FROM SOCIAL where User_Id='$_SESSION[user_id]' ");
$row=mysql_fetch_array($result);
if(isset($_GET['w']))
{
if($_GET['w']=='150')
{
	echo "<img src='upload/".$row['Image']."' height='150' width='150' style='border:5px solid;'>";
}
}
else
{
echo "<img src='upload/".$row['Image']."' height='200' width='200' style='border:5px solid;'>";
}

?>

