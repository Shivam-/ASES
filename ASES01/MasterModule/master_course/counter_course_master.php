 <?php  

{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

   $count=mysql_query('SELECT max(course_id) from mst_course');
$row = mysql_fetch_array($count) ;
		{
		echo   $row[0]  ;
	    }
 }
?>