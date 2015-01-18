 <?php  

if($_POST)
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

$question_no2=$_POST['question_no1'];
$question_name2=mysql_real_escape_string($_POST['question_name1']);
$max_marks2=$_POST['max_marks1'];

  
 

 try{
 $flag=0;
 if(mysql_query("INSERT INTO question_table(question_no,question_name,max_marks) VALUES('$question_no2','$question_name2','$max_marks2')")  )
		{$flag=1;
		echo "Form Submitted Successfully";}
else if($flag==0)
{echo "value".$flag;
throw new Exception(mysql_error());

}
}
catch (Exception $e) {
	$flag=0;
    echo $e ;
}
}
?>