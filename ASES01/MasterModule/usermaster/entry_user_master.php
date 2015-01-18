 <?php  
//if(isset($_POST['submit']))
if($_POST)
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());
$p_city_id=$_POST['p_city_id'];  
$usr_id=$_POST['usr_id'];
$l_name=$_POST['l_name'];  
$f_name=$_POST['f_name'];
$c_addr_line=$_POST['c_addr_line'];  
$p_addr_line=$_POST['p_addr_line'];
$p_country_id=$_POST['p_country_id'];  
$m_name=$_POST['m_name'];
$p_state_id=$_POST['p_state_id'];  
$c_country_id=$_POST['c_country_id'];
$father_name=$_POST['father_name'];  
$c_pincode=$_POST['c_pincode'];
$usr_password=$_POST['usr_password'];  
$p_pincode=$_POST['p_pincode'];
$mather_name=$_POST['mather_name'];  
$date_of_birth=$_POST['date_of_birth'];
$date_of_joining=$_POST['date_of_joining'];  
$usr_mail=$_POST['usr_mail'];
$dept_id=$_POST['dept_id'];
$usr_type_id=$_POST['usr_type_id'];
$c_state_id=$_POST['c_state_id'];  
$c_city_id=$_POST['c_city_id'];
$is_active=$_POST['is_active'];
 
try{
 $flag=0;
 if(mysql_query("INSERT INTO mst_user(usr_id,f_name,m_name,l_name,p_addr_line,c_addr_line,p_state_id,p_country_id,p_city_id,c_state_id,c_city_id,c_country_id,p_pincode,c_pincode,father_name,mather_name,usr_password,is_active,date_of_joining,date_of_birth,usr_type_id,dept_id,usr_mail) VALUES( 'usr_id','f_name','m_name','l_name','p_addr_line','c_addr_line','p_state_id','p_country_id','p_city_id','c_state_id','c_city_id','c_country_id','p_pincode','c_pincode','father_name','mather_name','usr_password','is_active','date_of_joining','date_of_birth','usr_type_id','dept_id','usr_mail')"))
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
 if(mysql_query("INSERT INTO mst_dept(dept_id,dept_name,is_active) VALUES( '$dept_id' ,'$dept_name','$is_active')")   )
		{$doc_id=mysql_query("select doc_id from mst_doc_ctrl where mst_doc_ctrl.doc_name='dept')");
		$doc_id=parseInt($doc_id)+1;
		mysql_query("INSERT INTO mst_doc_ctrl(doc_id) VALUES('$doc_id') where mst_doc_ctrl.doc_name='dept'");
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