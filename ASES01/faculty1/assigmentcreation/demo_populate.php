<?php
	// Reviving the college code
	$assignment_id = $_POST['assignment_idpp'];
	mysql_connect("localhost","root","") or die(mysql_error());
mysql_select_db("ases1") or die(mysql_error());
$res=mysql_query("select assignment_id,assignment_topic,submission_date,issue_date,mst_assignment.faculty_id,assignment_type,mst_assignment.max_marks,mst_assignment.passing_marks,mst_subject.subject_name,CONCAT(f_name,' ',m_name,' ',l_name)full_name from mst_subject INNER JOIN mst_user INNER JOIN mst_assignment ON mst_assignment.assignment_id='$assignment_id' AND mst_assignment.subject_id=mst_subject.subject_id AND mst_user.usr_id=mst_assignment.faculty_id"); 		
		 while($row=mysql_fetch_array($res))
		 {	$faculty_name= $row["full_name"];
			$assignment_id= $row["assignment_id"];
			$subject_name= $row["subject_name"];
			$submission_date= $row["submission_date"];
			$issue_date = $row["issue_date"];
			$assignment_type= $row["assignment_type"];
			$assignment_topic1= $row["assignment_topic"];
			$passing_marks= $row["passing_marks"];
			$max_marks = $row["max_marks"];
			echo $textout =$faculty_name."`".$assignment_id."`".$subject_name."`".$submission_date."`".$issue_date."`".$assignment_type."`".$assignment_topic1."`".$passing_marks."`".$max_marks;	
        
			

	     }  
 
	 
	 
?>