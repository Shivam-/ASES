<?php
	
	$subject_abbriviation = $_POST['subject_abbriviation'];
   $course_name = $_POST['course_name'];
	$con=mysql_connect("localhost","root","");
	mysql_select_db("ases1",$con);
	
	if (!$con) {
		die('Could not connect: ' . mysql_error());
            	}
	 
	 
	$res=mysql_query("select semester from mst_subject where mst_subject.sub_abbriviation='$subject_abbriviation'");
	$res1=mysql_query("select No_of_Semesters from mst_course where mst_course.course_name='$course_name'");	 
		$row1 = mysql_fetch_array($res);
			//echo "<option selected value=".$row1[0].">".$row1[0]."</option>";
		
          $row = mysql_fetch_array($res1);
	for($i=1;$i<=$row[0];$i++) {
											if($i==$row1[0])
		       									 {
															echo "<option selected value=".$row1[0].">".$row1[0]."</option>";
													}
		else {
											echo "<option value=".$i.">".$i."</option>"; 
				}
			
										}		
	 
?>