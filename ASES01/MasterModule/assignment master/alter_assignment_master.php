 <?php  
 

if($_POST)
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

$dept_name2=mysql_real_escape_string($_POST['dept_name1']);
$dept_abbriviation2=$_POST['dept_abbriviation1'];

   $is_active2=$_POST['is_active1'];
 
 //echo "1.".$is_active2;
  
 
 //mysql_query("UPDATE mst_department SET dept_name=".$dept_name2.",dept_abbriviation=".$dept_abbriviation2.",dept_mail=".$dept_mail2.",dept_contact=".$dept_contact2.",dept_director=".$dept_director2.",dept_pincode=".$dept_pincode2.",dept_country_id=".$dept_country_id2.",dept_state_id=".$dept_state_id2.",dept_city_id=".$dept_city_id2.",is_active=".$is_active2." where college_code=".$college_code2) 
 mysql_query("UPDATE `mst_department` SET `dept_name`='$dept_name2',`dept_abbriviation`='$dept_abbriviation2',`dept_mail`='$dept_mail2',`dept_contact`='$dept_contact2',`dept_director`='$dept_director2',`dept_state_id`='$dept_state_id2',`dept_pincode`='$dept_pincode2',`dept_country_id`='$dept_country_id2',`dept_city_id`='$dept_city_id2',`is_active`='$is_active2' WHERE `college_code`=".$college_code2)
  or die(mysql_error());  
  
   
echo "Form Submitted Succesfully";
 //mysql_close($connection); 

 }
?>