<?php
 {
	
         $clg_country_id = $_POST['clg_country_id'];
         
    
	 //if($_POST)
 
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());


	$cek = mysql_query("SELECT state_id, state_name FROM mst_state, mst_country WHERE mst_country.country_id=".$clg_country_id." and mst_state.country_id = mst_country.country_id");


                 
     
	//USER_ID='$username' AND PASSWORD='$password'";

	//$result = mysql_execute($connect, $cek);
	//oci_execute($result);
                echo "<option value=0>-----Make a Selection----</option>";
                  
		while ($row = mysql_fetch_array($cek))
		{
			echo "<option value=".$row['state_id'].">".$row['state_name']."</option>"; 
		}
}
?>
