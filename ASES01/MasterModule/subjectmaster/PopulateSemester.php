<?php
 {
	
         $course_id = $_POST['course_id'];
 			
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());


	$sem = mysql_query('SELECT No_of_Semesters FROM mst_course where mst_course.course_id='.$course_id);
						 
                echo "<option value=0>-----Make a Selection----</option>";
                  
		$row = mysql_fetch_array($sem);
					

		
	for($i=1;$i<=$row[0];$i++) {
		echo "<option value=".$i.">".$i."</option>"; 
								}		

		
		
}	
?>
