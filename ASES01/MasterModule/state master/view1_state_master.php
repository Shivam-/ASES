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
	
	$res=mysql_query("select state_id,state_name,is_active,country_id from mst_state");
	
	echo "<center><table  class='tabledesign' > 
	<tr style='width:300px'>
	 <th><center>State&nbsp;ID</center></th>
	 <th><center>State&nbsp;Name</center></th>
	 <th><center>Country&nbsp;ID</center></th>
	 <th><center>Is&nbsp;Active</center></th>	
     <th><center>Update</center></th>  
	</tr>";
	if($res === FALSE) {
    die(mysql_error()); // TODO: better error handling
}

	while($row =mysql_fetch_array($res))
	{
 
	echo "<tr>";
	   echo  "<td class='state_id'><center>".$row['state_id']."</center></td>";
    	echo  "<td class='state_name'>".$row['state_name']."</td>";
	    echo  "<td class='country_id'><center>".$row['country_id']."</center></td>";
    	 //echo "<td  class='is_active3'>" . $row['is_active'] . "</td>";
	if($row['is_active']==1)
	echo "<p align='center'><td  class='is_active'>" . "Yes" . "</td>";
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






