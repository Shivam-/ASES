 <?php  

 

mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());
$no=mysql_real_escape_string($_POST['no']);
   $count=mysql_query("SELECT ques_no from mcq_entry where ques_no like '$no'");
    $row = mysql_fetch_array($count) ;
	
		$temp=$row[0];
			 
			echo$temp  ;
			
	    

		
?>