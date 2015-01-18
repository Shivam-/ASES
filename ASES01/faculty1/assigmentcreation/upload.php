<?php 
$con = mysql_connect('localhost', 'root', ''); //Update hostname
mysql_select_db("ases1", $con); //Update database name
 
define ("MAX_SIZE","1000"); 
function getExtension($str)
{
	 $i = strrpos($str,".");
	 if (!$i) { return ""; }
	 $l = strlen($str) - $i;
	 $ext = substr($str,$i+1,$l);
	 return $ext;
}
 
$errors=0;
$image = $_FILES['image']['name'];
echo "image".$image;
if ($image) 
{
	$filename = stripslashes($_FILES['image']['name']);
	$extension = getExtension($filename);
	$extension = strtolower($extension);
	if (($extension != "jpg") && ($extension != "jpeg") && ($extension != "png") 
		&& ($extension != "gif")&& ($extension != "JPG") && ($extension != "JPEG") 
		&& ($extension != "PNG") && ($extension != "GIF")) 
	{
		echo '<h3>Unknown extension!</h3>';
		$errors=1;
	}
	else
	{
		$size=filesize($_FILES['image']['tmp_name']);
 
		if ($size > MAX_SIZE*1024)
		{
			echo '<h4>You have exceeded the size limit!</h4>';
			$errors=1;
		}
 
		$image_name=time().'.'.$extension;
		$newname="img/".$image_name;
 
		$copied = copy($_FILES['image']['tmp_name'], $newname);
		if (!$copied) 
		{
			echo '<h3>Copy unsuccessfull!</h3>';
			$errors=1;
		}
		else echo '<h3>uploaded successfull!</h3>';
 
		mysql_query("insert into  asg_img_f(img_path) values('".$newname."')");
	}
 
	//Display image
	$rs=mysql_query("select * from asg_img_f");
	if($rs)
		while($row=mysql_fetch_array($rs))
		{
		 ?>
		 <img width="150" src="<?php echo $row['img_path'];?>"><br>
		 <?php 
		}
}
?>