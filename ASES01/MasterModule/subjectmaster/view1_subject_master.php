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
.tabledesign .edit:hover 
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
	//echo 'Connected successfully';
	
	$res=mysql_query("select subject_id,uni_sub_code,subject_name,sub_abbriviation,course_name,branch_name,type,is_elective,max_marks,mst_subject.is_active from mst_subject,mst_course,mst_branch where mst_subject.branch=mst_branch.branch_id and mst_subject.course=mst_course.course_id");
	
	echo "<center><table  class='tabledesign' > 
	<tr style='width:300px'>
	<th>Subject&nbsp;ID </th>	
	<th>Subject&nbsp;Code </th>
	<th>Subject&nbsp;Name</th>
	<th>Subject Abbreviation</th>
	<th>Course</th>
	<th>Branch</th>
	<th>Type</th>
	<th>Is Elective</th>
	<th>MM</th>
	<th>Is Active</th>
	<th>Update</th>  
	</tr>";
	while($row=mysql_fetch_array($res))
	{
        

	echo "<tr>";
	echo "<td class='subject_id'><center>" . $row['subject_id'] . "<center></td>";
   echo "<td class='uni_sub_code'>" . $row['uni_sub_code'] . "</td>";
   echo "<td class='subject_name'>" . $row['subject_name'] . "</td>"; 	
   echo "<td class='subject_abbriviation'>" . $row['sub_abbriviation'] . "</td>";
	echo "<td class='course_name'>" . $row['course_name'] . "</td>";
	echo "<td  class='branch_name'>" . $row['branch_name'] . "</td>";
	if($row['type']==1)
	echo "<td  class='type'>" . "Theory" . "</td>";
	else
	if($row['type']==2)
	echo "<td  class='type'>" . "Practical" . "</td>";
	if($row['is_elective']==1)
	echo "<td  class='is_elective'>" . "Yes" . "</td>";
	else
	if($row['is_elective']==0)
	echo "<td  class='is_elective'>" . "No" . "</td>";
	echo "<td class='max_marks'>" . $row['max_marks'] . "</td>";
	if($row['is_active']==1)
	echo "<td  class='is_active'>" . "Yes" . "</td>";
	else
	if($row['is_active']==0)
	echo "<td  class='is_active'>" . "No" . "</td>"; 
echo "<td class='edit'><a class='info_edit' style='cursor:pointer'>Edit</a> 
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






