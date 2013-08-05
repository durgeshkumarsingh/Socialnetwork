<?php
include_once 'dbconnection.php';
$sql=("Select id,content from messages where User_Id='".$_SESSION['user_id']."' ");
$result=mysql_query($sql);
if(mysql_num_rows($result)>0)
{

	//echo $fetch['id']."<br/>";
	$sql1=("select comment,User_Id,msgid from comment where msgposterid='".$_SESSION['user_id']."' and User_Id!='".$_SESSION['user_id']."' order by c_id desc");
	$result1=mysql_query($sql1) or die (mysql_query());
	if(mysql_num_rows($result1)>0)
	{
	while($fetch1=mysql_fetch_array($result1))
	{
		
			$sql2=("Select Fname,Lname from SOCIAL where User_Id='".$fetch1['User_Id']."'");
			$result2=mysql_query($sql2);
			$fetch2=mysql_fetch_array($result2);
			$sql3=("select content from messages where id='".$fetch1['msgid']."'");
			$result3=mysql_query($sql3);
			$fetch3=mysql_fetch_array($result3);
	echo "<li><a href='notificationview.php? x=".$fetch1['msgid']."' id='privacySet'>".$fetch2['Fname']." ".$fetch2['Lname']." commented ".$fetch1['comment']." on your post ".substr($fetch3['content'],0,20)."...</a></li>" ;
	



	}
	}
	else
	{	
	
	echo "<li><a href='#'>No Notification</a></li>";
	}



}
else
{
	echo "<li><a href='#'>No Notification</a></li>";
}
?>
