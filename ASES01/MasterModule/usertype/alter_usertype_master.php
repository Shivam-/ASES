 <?php  
 

if($_POST)
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

$type_id2=$_POST['type_id1'];
$type_name2=$_POST['type_name1'];

   $is_active2=$_POST['is_active1'];
 
 //echo "1.".$is_active2;
  
 
 //mysql_query("UPDATE mst_college_info SET clg_name=".$clg_name2.",clg_address_line=".$clg_address_line2.",clg_mail=".$clg_mail2.",clg_contact=".$clg_contact2.",clg_director=".$clg_director2.",clg_pincode=".$clg_pincode2.",clg_country_id=".$clg_country_id2.",clg_state_id=".$clg_state_id2.",clg_city_id=".$clg_city_id2.",is_active=".$is_active2." where college_code=".$college_code2) 
 mysql_query("UPDATE `mst_usr_type` SET `type_name`='$type_name2',`is_active`='$is_active2' WHERE `type_id`=".$type_id2) or die(mysql_error());  
  
   
echo "Form Submitted Succesfully";
 //mysql_close($connection); 

 }
?>