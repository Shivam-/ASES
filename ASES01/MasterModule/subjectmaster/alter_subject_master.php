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
  
 mysql_query("UPDATE `mst_subject` SET `subject_name`='$subject_name',`uni_sub_code`='$subject_code',`sub_abbriviation`='$subject_abbreviation',`course`='$course_id',`branch`='$branch_id',`semester`='$semester_id',`type`='$type',`max_marks`='$max_marks',`is_elective`='$is_elective',`is_active`='$is_active' WHERE `subject_id`=".$subject_id)
  or die(mysql_error());  
  
   
echo "Form Altered Succesfully";
 //mysql_close($connection); 

 }
?>