<style>



.tabledesign
{
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	font-size:15px;
	margin: 20px;
	margin-right:20px;
	width: 90%;
	text-align: left;
	border-collapse: collapse;
}
.tabledesign th
{
	font-size: 13px;
	font-weight: normal;
	padding: 8px;
	background: #666666;
		border: 1px solid #ccc; 
		font-weight: bold; 
	color: #FFFFFF;
}
.tabledesign td
{
	padding: 8px; 
	border: 1px solid #ccc; 
	color: #669;
	
	background: #eee; 
}
.tabledesign tfoot tr td
{
	background: #e8edff;
	font-size: 12px;
	border: 1px solid #ccc; 
	color: #99c;
}
.tabledesign tbody tr:hover td
{
	background: #CCCCCC;

		color: #333333;
}
.tabledesign .create:hover 
{
//font-size:10px;
font-style:italic;
color: #663333;
text-decoration:underline;
}
.tabledesign .modify:hover 
{
//font-size:10px;
font-style:italic;
color: #663333;
text-decoration:underline;
}
.tabledesign .dispatch:hover 
{
//font-size:10px;
font-style:italic;
color: #663333;
text-decoration:underline;
}

</style>


<?php 
{	 
	$con=mysql_connect("localhost","root","");
	mysql_select_db("ases1",$con);	
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
	
	$res=mysql_query("select * from mst_assignment,mst_subject,mst_user,mst_faculty WHERE mst_assignment.subject_id=mst_subject.subject_id AND mst_user.usr_id=mst_faculty.faculty_id AND mst_assignment.faculty_id=mst_faculty.faculty_id");	
	echo "<center><table  class='tabledesign'> 
	<tr style='width:500px'>
	<th>Subject&nbsp;Name</th>
	<th>Ass.&nbsp;Id </th>
	<th>Ass.&nbsp;Topic</th>
	<th>Submission&nbsp;Date</th>
	<th>Issue&nbsp;Date</th>   
	<th>CREATE</th>  
	<th>MODIFY</th>
	<th>DISPATCH</th>
	</tr>";
	
	
	while($row=mysql_fetch_array($res))
	{
	
	echo "<tr>";
	echo "<td  class='subject_name3'>" . $row['subject_name'] . "</td>";
	echo "<td class='assignment_id3'>" . $row['assignment_id'] . "</td>";
	$assignment_idp=$row['assignment_id'];
	//echo $assignment_id;
	//echo $assignment_idp;
	echo "<td  class='assignment_topic3'>" . $row['assignment_topic'] . "</td>";
    echo "<td  class='submission_date3'>" . $row['submission_date'] . "</td>";
	echo "<td  class='issue_date3'>" . $row['issue_date'] . "</td>";
echo "<td class='create'><a href='assigmentcreation.html?id=$assignment_idp'>CREATE</a>
   </td>";
   echo "<td class='modify'><a class='info_edit1' style='cursor:pointer'>MODIFY</a> 
   </td>";
   echo "<td class='dispatch'><a class='info_edit2' style='cursor:pointer'>DISPATCH</a> 
   </td>";
 
    echo "</tr>";	

}
	echo "</table></center>";
	
 
	}
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";
	echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo "<br>";
	echo "<br>";
	echo "<br>";
	 
	 
	 
?>