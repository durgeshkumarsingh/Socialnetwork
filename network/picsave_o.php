<?php
include_once('dbconnection.php');
if(isset($_SESSION['m']))
{
$mn=$_SESSION['m'];
$sql="SELECT Image FROM SOCIAL where User_Id='$mn'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);

echo "<img src='upload/".$row['Image']."' height='200' width='200' style='border:5px solid;'>";
}
?>
