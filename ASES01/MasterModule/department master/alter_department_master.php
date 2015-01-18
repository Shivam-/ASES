 <?php  
 

if($_POST)
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

$dept_id2=$_POST['dept_id1'];
$dept_name2=$_POST['dept_name1'];
$dept_abbriviation2=$_POST['dept_abbriviation1'];
   $is_active2=$_POST['is_active1'];
 
 //echo "1.".$is_active2;
  
 
 //mysql_query("UPDATE mst_college_info SET clg_name=".$clg_name2.",clg_address_line=".$clg_address_line2.",clg_mail=".$clg_mail2.",clg_contact=".$clg_contact2.",clg_director=".$clg_director2.",clg_pincode=".$clg_pincode2.",clg_country_id=".$clg_country_id2.",clg_state_id=".$clg_state_id2.",clg_city_id=".$clg_city_id2.",is_active=".$is_active2." where college_code=".$college_code2) 
 mysql_query("UPDATE `mst_department` SET `dept_name`='$dept_name2',`dept_abbriviation`='$dept_abbriviation2',`is_active`='$is_active2' WHERE `dept_id`=".$dept_id2) or die(mysql_error());  
  
   
echo "Form Submitted Succesfully";
 //mysql_close($connection); 

 }
?>