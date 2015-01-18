<style>



.tabledesign
{
	font-family: "Lucida Sans Unicode", "Lucida Grande", Sans-Serif;
	font-size:15px;
	margin: 20px;
	margin-right:20px;
	width: 95%;
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
	
	$res=mysql_query("select * from mst_course");
	
	echo "<center><table  class='tabledesign' > 
	<tr>
	<th >Course&nbsp;ID </th>
	<th>Course Abbreviation</th>
	<th style='width:40%'>Course&nbsp;Name</th>
	<th>Have Branches </th>
	<th style='width:20%'>Course Category</th>
	<th>Is&nbsp;Active</th>   
	<th>Update</th>  
	  
	 
	</tr>";
	while($row=mysql_fetch_array($res))
	{
	echo "<tr>";
	echo "<td class='course_id3'><center>".$row['course_id']."</center></td>";
    	echo "<td  class='course_abbreviation3'>".$row['course_abbreviation']."</td>";
		echo "<td class='course_name3'>".$row['course_name']."</td>";
		if($row['have_branches']==1)
	 echo "<td  class='have_branches3'>"."Yes"."</td>"; 
	else
	if($row['have_branches']==0)
	 echo "<td  class='have_branches3'>"."No"."</td>"; 
	echo "<td  class='course_category3'>".$row['type_of_course']."</td>";
	if($row['is_active']==1)
	echo "<td  class='is_active3'>"."Yes"."</td>";
	else
	if($row['is_active']==0)
	echo "<td  class='is_active3'>"."No"."</td>";
	echo "<td class='edit'><a class='info_edit' style='cursor:pointer'>Edit</a></td>"; 
   
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






