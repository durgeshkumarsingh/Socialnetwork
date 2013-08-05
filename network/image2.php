<?php
include('dbconnection.php');
$result=mysql_query("SELECT Image FROM SOCIAL  ");
$row=mysql_fetch_array($result);
echo $row['Image'];
echo "<img src='upload/".$row['Image']."' height='100' width='200'>";
$user_id=$_SESSION['user_id'];
$path = "upload/";

	$valid_formats = array("jpg", "png", "gif", "bmp");
	if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
		{
			$name = $_FILES['photoimg']['name'];
			$size = $_FILES['photoimg']['size'];
			
			if(strlen($name))
				{
					list($txt, $ext) = explode(".", $name);
					if(in_array($ext,$valid_formats))
					{
					if($size<(10*1024000))
						{
							$actual_image_name = time().substr(str_replace(" ", "_", $txt), 85).".".$ext;
							$tmp = $_FILES['photoimg']['tmp_name'];
							if(move_uploaded_file($tmp, $path.$actual_image_name))
								{
								mysql_query("UPDATE SOCIAL SET Image='$actual_image_name' WHERE User_Id='$user_id'");
								mysql_query("UPDATE messages SET Image='$actual_image_name' WHERE User_Id='$user_id'");
								mysql_query("UPDATE comment SET Image='$actual_image_name' WHERE User_Id='$user_id'");
								
								}
							else
								echo "failed";
						}
						else
						echo "Image file size max 1 MB";					
						}
						else
						echo "Invalid file format..";	
				}
				
			else
				echo "Please select image..!";
				
			
		}
	
?>
