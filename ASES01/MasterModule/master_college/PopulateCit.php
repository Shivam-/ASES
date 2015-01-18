<?php
 {
	
         $clg_state_id = $_POST['clg_state_id'];
         $college_code=$_POST['college_code'];
    
	 //if($_POST)
 
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());


	$cek = mysql_query("SELECT city_id, city_name,clg_city_id FROM mst_city, mst_state,mst_college_info WHERE college_code=".$college_code." and mst_state.state_id=".$clg_state_id." and mst_city.state_id = mst_state.state_id and mst_city.city_id=mst_college_info.clg_city_id");
	$cek1 = mysql_query("SELECT city_id, city_name  FROM mst_city WHERE  mst_city.state_id=".$clg_state_id );

                 
     
	 
                  
		$row1 = mysql_fetch_array($cek);
		 
			echo "<option selected value=".$row1['city_id'].">".$row1['city_name']."</option>"; 
			//$result = array_diff($cek1, $cek);
		  while($row=mysql_fetch_array($cek1))
		  {   if($row1['city_id'] ==$row['city_id'])
		        {
				continue;
				}
		        
		  echo "<option value=".$row['city_id'].">".$row['city_name']."</option>"; 
		  
		  
		  }
}
?>
