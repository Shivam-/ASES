 <?php  
if($_POST)
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

$subject_id=$_POST['subject_id'];
$subject_name=mysql_real_escape_string($_POST['subject_name']);
$subject_code=$_POST['subject_code'];
$subject_abbreviation=$_POST['subject_abbreviation'];
$course_id=$_POST['course_id'];
$branch_id=$_POST['branch_id'];
$semester_id=$_POST['semester_id'];
$type=$_POST['type'];
$max_marks=$_POST['max_marks'];
$is_elective=$_POST['is_elective'];
$is_active=$_POST['is_active'];

 mysql_query("INSERT INTO mst_subject(subject_id,subject_name,uni_sub_code,sub_abbriviation,semester,branch,course,type,is_elective,max_marks,is_active) VALUES('$subject_id','$subject_name','$subject_code','$subject_abbreviation','$semester_id','$branch_id','$course_id','$type','$is_elective','$max_marks','$is_active')")  
 or die(mysql_error());		
		echo "Form Submitted Successfully";  //.",".$flag;

}
?>