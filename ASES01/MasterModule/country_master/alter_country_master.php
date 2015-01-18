 <?php  
 

if($_POST)
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());
$country_name=$_POST['country_name'];
$country_id=$_POST['country_id'];
$is_active=$_POST['is_active']; 
 mysql_query("UPDATE `mst_country` SET `country_name`='$country_name',`country_id`='$country_id',`is_active`='$is_active' WHERE `country_id`=".$country_id)
  or die(mysql_error());  
  
   
echo "Form Altered Succesfully";
 //mysql_close($connection); 

 }
?>