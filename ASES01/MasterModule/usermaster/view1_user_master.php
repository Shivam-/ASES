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
	
	$res=mysql_query("select usr_id,f_name,m_name,l_name,p_addr_line,c_addr_line,p_state_id,p_country_id,p_city_id,c_state_id,c_city_id,c_country_id,p_pincode,c_pincode,father_name,mather_name,usr_password,is_active,date_of_joining,date_of_birth,usr_type_id,dept_id,usr_mail from mst_user");	
	echo "<center><table  class='tabledesign'> 
	<tr style='width:500px'>
	<th>user &nbsp;Id </th>
	<th>Name</th>
	<th>Birth&nbsp;Date</th>
	<th>email&nbsp;id</th>
	<th>Address</th>
	<th>User &nbsp;type</th>
	<th>Department</th>
	<th>Father's &nbsp;Name</th>
    <th>Is&nbsp;Active</th>   
	<th>Update</th>  
	</tr>";
	while($row=mysql_fetch_array($res))
	{
	echo "<tr>";
	echo "<td class='usr_id3'>" . $row['usr_id'] . "</td>";
    echo "<td class='f_name3'>" . $row['f_name.m_name.l_name'] . "</td>";
	echo "<td  class='date_of_birth3'>" . $row['date_of_birth'] . "</td>";
	echo "<td  class='usr_mail3'>" . $row['usr_mail'] . "</td>";
	echo "<td  class='p_addr_line3'>" . $row['p_addr_line'] . "</td>";
	echo "<td  class='type_name3'>" . $row['type_name'] . "</td>";
	echo "<td  class='dept_name3'>" . $row['dept_name'] . "</td>";
	echo "<td  class='f_name3'>" . $row['f_name'] . "</td>";
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






