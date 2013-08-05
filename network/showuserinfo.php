<?php

$user_id= $_SESSION['user_id'];
	$sql="SELECT *FROM SOCIAL WHERE User_Id='$user_id'";
	$rws = mysql_fetch_array(mysql_query($sql));	
	$_SESSION['Fname']=$rws['Fname'];	
	$_SESSION['Lname']=$rws['Lname'];
	$_SESSION['User_Id']=$rws['User_Id'];
	$_SESSION['propic']=$rws['Image'];
	$date=$rws['DOB'];
	$newdate=new DateTime($date);
	$DOB=date_format($newdate,'d-M-Y');
?>		
    
	<div align="left" style="font-size: 15px;">Name:</div><div style="font-size: 18px;"><?php echo $rws['Fname']." ".$rws['Lname']; ?><p></div>
    <div align="left" style="font-size: 15px;">Date of Birth:</div><div style="font-size: 20px; "><?php echo $DOB; ?><p></div>
    <div align="left" style="font-size: 15px;">Gender:</div><div style="font-size: 20px; "><?php echo $rws['Gender']; ?><p></div>
    <div align="left" style="font-size: 15px;">Conatact no:</div><div style="font-size: 20px;"><?php echo $rws['Mobile'];?><p></div>
		<?php if($rws['College']!='')
		{
			?>
    <div align="left" style="font-size: 15px;">College:</div><div style="font-size: 20px; "><?php echo $rws['College'];?></div>
    <?php
}
else
{
	echo "";
	}?>
