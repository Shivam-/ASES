<?php
 {
         $branch_name=$_POST['branch_name'];
    
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

	$cek = mysql_query("SELECT branch_id, branch_name FROM mst_branch WHERE mst_branch.branch_name='$branch_name'");
	$cek1 = mysql_query("SELECT branch_id, branch_name  FROM mst_branch ");
	
		 $row1 = mysql_fetch_array($cek);
		 
			echo "<option selected value=".$row1['branch_id'].">".$row1['branch_name']."</option>"; 
			
		  while($row=mysql_fetch_array($cek1))
		  {     if($row1['branch_id'] ==$row['branch_id'])
		        {
				continue;
				}
		  echo "<option value=".$row['branch_id'].">".$row['branch_name']."</option>"; 
		  
		  
		  }
}
?>
