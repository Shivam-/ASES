 <?php  
 

if($_POST)
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

$course_name=mysql_real_escape_string($_POST['course_name']);
$course_id=$_POST['course_id'];
$have_branches=$_POST['have_branches'];
$course_abbreviation=$_POST['course_abbreviation'];
$is_active=$_POST['is_active'];
    
 try{
 $flag=0;
 if(mysql_query("UPDATE `mst_course` SET `course_name`='$course_name',`have_branches`='$have_branches',`course_abbreviation`='$course_abbreviation',`is_active`='$is_active' WHERE `course_id`=".$course_id))
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