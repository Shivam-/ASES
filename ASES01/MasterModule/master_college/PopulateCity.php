<?php
 {
	
         $clg_state_id = $_POST['clg_state_id'];
         
    
	 //if($_POST)
 
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());


	$cek = mysql_query("SELECT city_id, city_name FROM mst_city, mst_state WHERE mst_state.state_id=".$clg_state_id." and mst_city.state_id = mst_state.state_id");


                 
     
	//USER_ID='$username' AND PASSWORD='$password'";

	//$result = mysql_execute($connect, $cek);
	//oci_execute($result);
                echo "<option value=0>-----Make a Selection----</option>";
                  
		while ($row = mysql_fetch_array($cek))
		{
			echo "<option value=".$row['city_id'].">".$row['city_name']."</option>"; 
		}
}
?>
