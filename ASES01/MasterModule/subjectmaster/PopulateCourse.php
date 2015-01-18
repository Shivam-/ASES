<?php
 {
	
          
         
    
	 //if($_POST)
 
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());


	$cek = mysql_query("SELECT course_id, course_name FROM mst_course");
	
                echo "<option value=0>-----Make a Selection----</option>";
                  
		while ($row = mysql_fetch_array($cek))
		{
			echo "<option value=".$row['course_id'].">".$row['course_name']."</option>"; 
		}
}
?>
