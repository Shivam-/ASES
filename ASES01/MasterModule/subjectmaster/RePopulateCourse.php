<?php
	
	$course_name = $_POST['course_name'];

	$con=mysql_connect("localhost","root","");
	mysql_select_db("ases1",$con);
	
	if (!$con) {
		die('Could not connect: ' . mysql_error());
            	}
	 
	 
	$res=mysql_query("select course_id,course_name from mst_course where mst_course.course_name='$course_name'");
	$res1=mysql_query("select course_id,course_name from mst_course");	 
		
		$row1 = mysql_fetch_array($res);
		 
			echo "<option selected value=".$row1['course_id'].">".$row1['course_name']."</option>";
		while($row=mysql_fetch_array($res1))
		  {     if($row1['course_id'] ==$row['course_id'])
		        {
				continue;
				}
		  echo "<option value=".$row['course_id'].">".$row['course_name']."</option>"; 
		  
		  
		  }

	 
?>