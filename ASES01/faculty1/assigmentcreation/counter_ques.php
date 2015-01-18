 <?php  
//if(isset($_POST['submit']))
//if($_POST)
 
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());
//ques_no=0;
//mysql_query("INSERT INTO mcq_entry(ques_no) VALUES('$ques_no')");
   $count=mysql_query('SELECT max(ques_no) from mcq_entry');

 
 //$cou= mysql_fetch_assoc ($count);
  
  //$cek=0;
   

 $row = mysql_fetch_array($count) ;
		{
			echo   $row[0]  ;
	    
			  
		}


 }
?>