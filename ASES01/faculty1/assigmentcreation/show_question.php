 <?php  

 
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

  $question_no2=mysql_real_escape_string($_POST['no']);



 
 //$cou= mysql_fetch_assoc ($count);
  
  //$cek=0;
   

 $count = mysql_query("SELECT * FROM mcq_entry WHERE ques_no like '$question_no2';") ;
 
 $row = mysql_fetch_array($count) ;
 
		{
			 
			echo   $row[0]."##" .$row[1]."##" .$row[2] ."##" .$row[3]."##" .$row[4]."##" .$row[5]."##" .$row[6]."##" .$row[7]."##" .$row[8]."##" .$row[9]."##" .$row[10]."##" .$row[11]."##" .$row[12] ;
			
	    
			  
		}

 //mysql_close($connection); 

 }
?>





