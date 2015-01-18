<style>



.tabledesign
{
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	font-size:15px;
	margin:0px;
	margin-right:0px;
	width:100px;
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
	padding: 6px; 
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
	
	$res=mysql_query("select assignment_id,faculty_name,submission_date,issue_date,assignment_topic,subject_name,is_active,faculty_id,subject_id from mst_assignment,mst_faculty,mst_su");
	
	echo "<center><table  class='tabledesign'> 
	<tr style='width:500px'>
	<th>Ass.&nbsp;Id </th>
	<th>faculty&nbsp;Name</th>
	<th>Submission&nbsp;Date</th>
	<th>Issue&nbsp;Date</th>
	<th>Ass.&nbsp&nbsp;Topic</th>
	<th>Subject&nbsp;Name</th>
    <th>Is&nbsp;Active</th>   
	<th>Update</th>  
	</tr>";
	while($row=mysql_fetch_array($res))
	{
	echo "<tr>";
	echo "<td class='assignment_id3'>" . $row['assignment_id'] . "</td>";
    echo "<td class='faculty_name3'>" . $row['faculty_name'] . "</td>";
	echo "<td  class='submission_date3'>" . $row['submission_date'] . "</td>";
	echo "<td  class='issue_date3'>" . $row['issue_date'] . "</td>";
	echo "<td  class='assignment_topic3'>" . $row['assignment_topic'] . "</td>";
	echo "<td  class='subject_name3'>" . $row['subject_name'] . "</td>";
	//echo "<td  class='is_active3'>" . $row['is_active'] . "</td>";
	if($row['is_active']==1)
	echo "<td  class='is_active3'>" . "Yes" . "</td>";
	else
	if($row['is_active']==0)
	echo "<td  class='is_active3'>" . "No" . "</td>";
   
	 
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






