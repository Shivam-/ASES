<?php
	// Reviving the college code
	$college_code = $_POST['college_code'];
	//$college_code=intval($college_code);
	$con=mysql_connect("localhost","root","");
	mysql_select_db("ases1",$con);
	
	if (!$con) {
		die('Could not connect: ' . mysql_error());
            	}
	 
	
	$res=mysql_query("select clg_mail,clg_address_line,clg_country_id,country_name,clg_state_id,state_name,clg_city_id,city_name from mst_college_info,mst_country,mst_state,mst_city where mst_college_info.college_code=".$college_code." and mst_college_info.clg_country_id=mst_country.country_id and mst_college_info.clg_state_id=mst_state.state_id and mst_college_info.clg_city_id=mst_city.city_id");
	     
		 
		
		
		
		 while($row=mysql_fetch_array($res))
		 {
	
		 
		$clg_mail= $row["clg_mail"];
		$cntry= $row["clg_country_id"];
		$state= $row["clg_state_id"];
		$city= $row["clg_city_id"];
		$clg_address_line = $row["clg_address_line"];
		 
		echo $textout =  $clg_mail."`".$clg_address_line."`".$cntry."`".$state."`".$city;	
        
			

	     }  
 
	 
	 
?>