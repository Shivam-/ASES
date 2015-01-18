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
	
	$res=mysql_query("select * from mcq_entry");
	
	while($row=mysql_fetch_array($res))
	{
	
	$space="";
	$ques=$row['ques_no'];
	$ques
	$option_a=$row['option_a'];
	$option_b=$row['option_b'];
	$option_c=$row['option_c'];
	$option_d=$row['option_d'];
	$is_true_false=$row['is_true_false'];
	$true_id=$row['true_id'];
echo$space."<formatbasic>Q".$row['ques_no'].")&emsp;".$row['ques_text'].$row['max_marks']." </formatbasic><br/><br/>";
       if($is_true_false==1)
	   {
				echo "&emsp;&emsp;&emsp;&emsp;&emsp;"."<formatbasic>i)TRUE"."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ii)FALSE"."</formatbasic><br/><br/>";
	   
	   }
	   else
	   
	   {echo "&emsp;&emsp;&emsp;&emsp;&emsp;"."<formatbasic>i)".$option_a."&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;ii)".$option_b."</formatbasic><br/><br/>";
			echo "&emsp;&emsp;&emsp;&emsp;&emsp;"."<formatbasic>iii)".$option_c."&emsp;&emsp;&emsp;&emsp;iv)".$option_d."</formatbasic><br/><br/>";
	   }
 }
echo "</div>";



?>