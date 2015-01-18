<?php
 {
	
          
         
    
	 //if($_POST)
 
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());


	$cek = mysql_query("SELECT country_id, country_name FROM mst_country");


                 
     
	//USER_ID='$username' AND PASSWORD='$password'";

	//$result = mysql_execute($connect, $cek);
	//oci_execute($result);
                echo "<option value=0>-----Make a Selection----</option>";
                  
		while ($row = mysql_fetch_array($cek))
		{
			echo "<option value=".$row['country_id'].">".$row['country_name']."</option>"; 
		}
}
?>
