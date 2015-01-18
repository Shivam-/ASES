<style>
.course h1{
color:#125423;

}

.course h2{
text-align:center;
margin-top:-1.5%;
color:545326;
}

.course h3{
text-align:center;
margin-top:-1.5%;
color:545326;
font-size:20px;
}

.course h4{
text-align:center;
}
.course issue{
font-weight:bold;
font-size:20px;
color:#145236;
}
.course submission{
font-weight:bold;
font-size:20px;
color:#145236;
float:right;
}
.course formatbasic_sub{
font-size:18px;
color:#545665;
float:right;
}
.course formatbasic{
font-size:18px;
color:#545665;
}
.course formatmarks{
float:right;
}



</style>






<?php
echo "<div  class='course' > ";
echo "<h1 align='center'>Meerut institue of technology(292)</h1>";
echo "<h2>B.TECH (Computer Science & Engineering) - V Semester - 'A'</h2> ";
echo "<h3>Object Oriented Techniques (ECS-503)</h3>";
echo "<h3> Assignment - 1   </h3>";
echo "<h3>Assignment Topic: xyz</h3>";
echo"<issue>Issue Date:</issue> <formatbasic>02-sep-14</formatbasic>";
 echo"<formatbasic_sub>08-sep-14</formatbasic_sub> <submission>Submission Date:</submission> ";
echo "<br/><br/><br/><br/>";

 $con=mysql_connect("localhost","root","");
	mysql_select_db("ases1",$con);
	
	if (!$con) {
		die('Could not connect: ' . mysql_error());
	}
	
	$res=mysql_query("select * from question_table");
	
	while($row=mysql_fetch_array($res))
	{
	$flag=-1;
	$space="";
	$ques=$row['question_no'];
	$ques_split=explode(".", $ques);
	
	for($i=0;$i<@strlen("$ques_split");$i++)
	{
	/*echo $i;*/
	if(@$ques_split[$i]=="")
	{
	
	break;
	}
	else
	{
	$space=str_repeat('&emsp;',$i);
	
	}
	}
	/*echo $space."kkk"."haha" ."<br>" ;*/
 echo$space."<formatbasic>Q".$row['question_no'].")&emsp;".$row['question_name']."<formatmarks>".$row['max_marks']."</formatmarks>"." </formatbasic><br/><br/>";
 
 
 }
echo "</div>";



?>