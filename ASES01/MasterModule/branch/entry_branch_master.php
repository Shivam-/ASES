 <?php  
//if(isset($_POST['submit']))
if($_POST)
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

$branch_id=$_POST['branch_id'];
$branch_name=mysql_real_escape_string($_POST['branch_name']);
$branch_abbreviation=$_POST['branch_abbreviation'];
$course_id=$_POST['course_name'];
$sections=$_POST['sections'];
$is_active=$_POST['is_active'];
    
 try{
 $flag=0;
 if(mysql_query("INSERT INTO mst_branch(branch_id,branch_name,branch_abbriviation,course_id,sections,is_active) VALUES('$branch_id','$branch_name','$branch_abbreviation','$course_id','$sections','$is_active')")  )
		{$flag=1;
		echo "Form Submitted Successfully".",".$flag;}
else if($flag==0)
{throw new Exception(mysql_error());}
}
catch (Exception $e) {
	$flag=0;
    echo $e->errorMessage().",".$flag ;
}
}
?>