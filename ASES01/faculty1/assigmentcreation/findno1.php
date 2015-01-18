 <?php  

 

mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());
$no=mysql_real_escape_string($_POST['no']);
   $count=mysql_query("SELECT question_no from question_table where question_no like '$no'");
    $row = mysql_fetch_array($count) ;
	
		$temp=$row[0];
			 if($no==$temp)
			 {
			echo  $temp."##"."1"  ;
			}
	    else{
		echo $temp."##"."0";
		}

		
?>