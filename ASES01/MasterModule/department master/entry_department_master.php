 <?php  
//if(isset($_POST['submit']))
if($_POST)
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

$dept_id2=$_POST['dept_id1'];
$dept_name2=mysql_real_escape_string($_POST['dept_name1']);
$dept_abbriviation2=$_POST['dept_abbriviation1'];

   $is_active2=$_POST['is_active1'];
 

 try{
 $flag=0;
 if(mysql_query("INSERT INTO mst_department(dept_id,dept_name,dept_abbriviation,is_active) VALUES('$dept_id2','$dept_name2','$dept_abbriviation2','$is_active2')")  )
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