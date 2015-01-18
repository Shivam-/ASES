<?php
 {
	
         $clg_country_id = $_POST['clg_country_id'];
         $college_code=$_POST['college_code'];
    
	 //if($_POST)
 
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());


	$cek = mysql_query("SELECT state_id, state_name,clg_state_id FROM mst_state, mst_country,mst_college_info WHERE college_code=".$college_code." and mst_country.country_id=".$clg_country_id." and mst_state.country_id = mst_country.country_id and mst_state.state_id=mst_college_info.clg_state_id");
	$cek1 = mysql_query("SELECT state_id, state_name  FROM mst_state WHERE  mst_state.country_id=".$clg_country_id );
	 //print_r(mysql_fetch_assoc($cek1));
         

                 
     
	//USER_ID='$username' AND PASSWORD='$password'";

	//$result = mysql_execute($connect, $cek);
	//oci_execute($result);
               // echo "<option value=0>-----Make a Selection----</option>";
                  
		 $row1 = mysql_fetch_array($cek);
		 
			echo "<option selected value=".$row1['state_id'].">".$row1['state_name']."</option>"; 
			//$result = array_diff($cek1, $cek);
		  while($row=mysql_fetch_array($cek1))
		  {     if($row1['state_id'] ==$row['state_id'])
		        {
				continue;
				}
		  echo "<option value=".$row['state_id'].">".$row['state_name']."</option>"; 
		  //else
		  //continue;
		  
		  }
}
?>
