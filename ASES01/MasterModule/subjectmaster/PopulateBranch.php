<?php
 {
	
         $course_id = $_POST['course_id'];
 
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());


	$cek = mysql_query("SELECT branch_id, branch_name FROM mst_branch, mst_course WHERE mst_course.course_id=".$course_id." and mst_branch.course_id = mst_course.course_id");

                echo "<option value=0>-----Make a Selection----</option>";
                  
		while ($row = mysql_fetch_array($cek))
		{
			echo "<option value=".$row['branch_id'].">".$row['branch_name']."</option>"; 
		}
}
?>
