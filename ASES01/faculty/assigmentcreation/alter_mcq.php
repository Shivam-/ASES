 <?php  
//if(isset($_POST['submit']))
if($_POST)
{ 
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

$option_a=$_POST['option_a'];
$option_b=$_POST['option_b'];
$option_c=$_POST['option_c'];
$option_d=$_POST['option_d'];
$checkbox_a=$_POST['checkbox_a'];
$checkbox_b=$_POST['checkbox_b'];
$checkbox_c=$_POST['checkbox_c'];
$checkbox_d=$_POST['checkbox_d'];
$ques_no=$_POST['ques_no']; 
$ques_text=$_POST['ques_text'];
$max_marks=$_POST['max_marks'];
/*$checkbox_a=$_POST['checkbox_a'];
$checkbox_b=$_POST['checkbox_b'];
$checkbox_c=$_POST['checkbox_c'];
$checkbox_d=$_POST['checkbox_d'];*/
$true_id=$_POST['true_id'];
$is_true_false=$_POST['is_true_false'];
//echo $true_id;
// try{
 //$flag=0;
 //if(
 /*mysql_query("INSERT INTO mcq_entry(ques_no,ques_text,max_marks,checkbox_a,checkbox_b,checkbox_c,checkbox_d,option_a,option_b,option_c,option_d,true_id,is_true_false) VALUES('$ques_no','$ques_text','$max_marks','$checkbox_a','$checkbox_b','$checkbox_c','$checkbox_d','$option_a','$option_b','$option_c','$option_d','$true_id','$is_true_false')")
 or die(mysql_error());*/
mysql_query("UPDATE `mcq_entry` SET `option_a`='$option_a',`option_b`='$option_b',`option_c`='$option_c',`option_d`='$option_d',`checkbox_a`='$checkbox_a',`checkbox_b`='$checkbox_b',`checkbox_c`='$checkbox_c',`checkbox_d`='$checkbox_d',`ques_text`='$ques_text',`max_marks`='$max_marks',`true_id`='$true_id',`is_true_false`='$is_true_false' WHERE `ques_no`=".$ques_no)
  or die(mysql_error()); 
		//{$flag=1;
		echo "Question Updated";
		//echo "Question saved".",".$flag;}
/*else if($flag==0)
{throw new Exception(mysql_error());}
}
catch (Exception $e) {
	$flag=0;
    echo $e->errorMessage().",".$flag ;
}*/
}
?>