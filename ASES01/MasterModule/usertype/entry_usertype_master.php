 <?php  
//if(isset($_POST['submit']))
if($_POST)
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

$type_id2=$_POST['type_id1'];
$type_name2=mysql_real_escape_string($_POST['type_name1']);


   $is_active2=$_POST['is_active1'];
 

 try{
 $flag=0;
 if(mysql_query("INSERT INTO mst_usr_type(type_id,type_name,is_active) VALUES('$type_id2','$type_name2','$is_active2')")  )
		{$flag=1;
		echo "Form Submitted Successfully".",".$flag;}
else if($flag==0)
{throw new Exception(mysql_error());}
}
catch (Exception $e) {
	$flag=0;
    echo $e ;
}
}
?>