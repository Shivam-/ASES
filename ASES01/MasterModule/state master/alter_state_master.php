 <?php  
 

if($_POST)
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());
$state_name=$_POST['state_name'];
$state_id=$_POST['state_id'];
$is_active=$_POST['is_active']; 
$country_id=$_POST['country_id'];
 mysql_query("UPDATE `mst_state` SET `state_name`='$state_name',`state_id`='$state_id',`is_active`='$is_active','country_id'='$country_id' WHERE `state_id`=".$state_id;
  or die(mysql_error());  
  
   
echo "Form Altered Succesfully";
 //mysql_close($connection); 

 }
?>