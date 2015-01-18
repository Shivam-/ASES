 <?php  
//if(isset($_POST['submit']))
if($_POST)
{$ques_no=$_POST['ques_no'];

mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());
$flag=0;
$res=mysql_query("select max(ques_no) from mcq_entry");
		$row1 = mysql_fetch_array($res);
		//echo $row1[0];

	for($i=1;$i<=$row1[0];$i++) {
											if($i==$ques_no)
		       									 {
														$flag=1;
															
													}
											
	
			
								  }
if($flag==1) {
                echo 1;
             } 
elseif($flag==0)
             {
             	echo 0;
             }
}
?>