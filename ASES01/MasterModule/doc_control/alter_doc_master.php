 <?php  
 
if($_POST)
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());
$doc_name=$_POST['doc_name'];
$doc_no=$_POST['doc_id'];
$is_active=$_POST['is_active']; 
 mysql_query("UPDATE `mst_doc_ctrl` SET `doc_name`='$doc_name',`is_active`='$is_active' WHERE `doc_no`=".$doc_no) or die(mysql_error());   
echo "Form Altered Succesfully";
 }
?>