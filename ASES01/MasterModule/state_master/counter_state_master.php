 <?php  
//if(isset($_POST['submit']))
//if($_POST)
 
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

   $count=mysql_query('SELECT max(state_id) from mst_state');

 
 //$cou= mysql_fetch_assoc ($count);
  
  //$cek=0;
  

 $row = mysql_fetch_array($count) ;
		{
			  //$state_id= $row["state_id"];
			echo   $row[0]  ;
	    
			  
		}

 //mysql_close($connection); 

 }
?>