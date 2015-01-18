 <?php  
//if(isset($_POST['submit']))
if($_POST)
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

 
$country_name=$_POST['country_name'];
  
 $country_id=$_POST['country_id'];
  
   $is_active=$_POST['is_active'];
 
try{
 $flag=0;
 if(mysql_query("INSERT INTO mst_country(country_id,country_name,is_active) VALUES( '$country_id' ,'$country_name','$is_active')")   )
		{
		$flag=1;
		echo "Form Submitted Succesfully";}
else if($flag==0)
{throw new Exception("College Already Exits");}
}
catch (Exception $e) {
    echo   $e->getMessage() ;
} 
 }
/* 
 try{
 $flag=0;
 if(mysql_query("INSERT INTO mst_country(country_id,country_name,is_active) VALUES( '$country_id' ,'$country_name','$is_active')")   )
		{$doc_id=mysql_query("select doc_id from mst_doc_ctrl where mst_doc_ctrl.doc_name='Country')");
		$doc_id=parseInt($doc_id)+1;
		mysql_query("INSERT INTO mst_doc_ctrl(doc_id) VALUES('$doc_id') where mst_doc_ctrl.doc_name='Country'");
		$flag=1;
		echo "Form Submitted Successfully";
		}
else if($flag==0)
{throw new Exception("College Already Exits");}
}
catch (Exception $e) {
    echo   $e->getMessage() ;
} 
 }*/
?>