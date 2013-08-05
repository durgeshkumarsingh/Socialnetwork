<?php
include_once("dbconnection.php");
$sql=("SELECT * FROM  messages order by timestamp desc");
$result=mysql_query($sql);
if(mysql_num_rows($result)>0)
{
while($fetch=mysql_fetch_array($result))
{
	$date=$fetch['timestamp'];
	$newdate=new DateTime($date);
	$DOB=date_format($newdate,'d-M-Y,H:i');
echo "<div style='margin-right:5px;'><a href='otherprofile.php?m=".$fetch['User_Id']."'>
<img src='upload/".$fetch['Image']."' height='50' width='50'></a></div><div style='float:left;margin-left:55px;margin-top:-45px;''>
<a href='otherprofile.php?m=".$fetch['User_Id']."'><strong>".$fetch['Name'].": </strong></a><a href='deletepost.php?d=".$fetch['id']." && uid=".$_SESSION['user_id']."'>Delete</a><span style='color:black;font-size:10px;'>".$DOB."</span>
</a><div style='margin-left:500px; margin-top:-20px;'><a href='vote.php?a=1 && b=".$fetch['id']."'><img src='images/buttonsfeat1.jpg' ></a>";

$sql6="Select * from votes where msgid='".$fetch['id']."'";
$res6=mysql_query($sql6) or die(mysql_error());
$numv=mysql_num_rows($res6);
echo "<span style='background:black;'> ".$numv." </span>";
echo "<a href='vote.php?a=2 && b=".$fetch['id']."'><img src='images/buttonsfeat2.jpg' ></a></div>".nl2br($fetch['content'])."</div><div style='margin-left:55px;'><form name='dispatches' action='comment.php?n=".$fetch['id']." && m=".$fetch['User_Id']."' method='post'>
<textarea rows='3' cols='70' placeholder='Write a comment..'name='cmnt' style='height:40px;overflow-x: hidden;overflow-y: hidden;resize: none;'></textarea>
<br><input type='submit' name='comment'value='comment'id='cmntc'></input></form></div>";
$sql1="SELECT *FROM comment order by c_id desc";
$result1=mysql_query($sql1) or die(mysql_error());
while($fetch1=mysql_fetch_array($result1))
{
	
	if($fetch['id']==$fetch1['msgid']){
		echo "<div style='margin-left:60px;max-height:100%; overflow:auto;'><a href='otherprofile.php?m=".$fetch1['User_Id']."'><img src='upload/".$fetch1['Image']."' height='30' width='30'></div><div style='margin-left:94px;margin-top:-30px;'><strong>".$fetch1['Name'].":  </strong></a><a href='cmntdelete.php?cid=".$fetch1['c_id']." && cmntr=".$fetch1['User_Id']." && msgr=".$fetch1['msgposterid']."'>Delete</a>".$fetch1['comment']."<hr></div>";
		
	}
}
echo "";
}
echo "";
}
else
{
echo "No post";
}?>
