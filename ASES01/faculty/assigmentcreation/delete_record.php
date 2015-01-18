 <?php  
//if(isset($_POST['submit']))
if($_POST)
{$ques_no=$_POST['ques_no'];

mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());
mysql_query("DELETE FROM `mcq_entry` WHERE ques_no='$ques_no'")
or die(mysql_error());
//echo "Record Deleted";
$res=mysql_query("select max(ques_no) from mcq_entry");
		$row1 = mysql_fetch_array($res);
		$j=0;
		for($i=$ques_no;$i<$row1[0];$i++)
		     {
				 $j=$i+1;
				 
				 mysql_query("UPDATE `mcq_entry` SET `ques_no`='$i' where `ques_no`='$j'")
                           or die(mysql_error());  
				
			 }
			 
			echo "Record Deleted";	 
}
?>