 <?php  
if($_POST)
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

$college_code2=$_POST['college_code1'];
$clg_name2=mysql_real_escape_string($_POST['clg_name1']);
$clg_address_line2=$_POST['clg_address_line1'];
$clg_mail2=$_POST['clg_mail1'];
$clg_contact2=$_POST['clg_contact1'];
$clg_director2=$_POST['clg_director1'];
 $clg_state_id2=$_POST['clg_state_id1'];
$clg_pincode2=$_POST['clg_pincode1'];
 $clg_country_id2=$_POST['clg_country_id1'];
 $clg_city_id2=$_POST['clg_city_id1'];
   $is_active2=$_POST['is_active1'];
   class customException extends Exception {
  public function errorMessage() {
    //error message
    $errorMsg =  'Entered email is not a valid E-Mail address'; 
    return $errorMsg;
  }
}
try {
  //check if
  if(filter_var($clg_mail2, FILTER_VALIDATE_EMAIL)== FALSE) {
    //throw exception if email is not valid
    throw new customException($clg_mail2);
  }
}

catch (customException $e) {
  //display custom message
	$flag=0;
 echo $e->errorMessage().",".$flag ;
  exit();
}
 try{
 $flag=0;
 if(mysql_query("INSERT INTO mst_college_info(college_code,clg_name,clg_address_line,clg_mail,clg_contact,clg_director,clg_state_id,clg_pincode,clg_country_id,clg_city_id,is_active) VALUES('$college_code2','$clg_name2','$clg_address_line2','$clg_mail2','$clg_contact2','$clg_director2','$clg_state_id2','$clg_pincode2','$clg_country_id2','$clg_city_id2','$is_active2')")  )
		{$flag=1;
		echo "Form Submitted Successfully".",".$flag;}
else if($flag==0)
{throw new Exception(mysql_error());}
}
catch (Exception $e) {
	$flag=0;
    echo $e->errorMessage().",".$flag ;
}
}
?>