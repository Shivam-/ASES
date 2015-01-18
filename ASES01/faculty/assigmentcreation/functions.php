 <?php  

 
{
mysql_connect("localhost","root","") or die(mysql_error());

mysql_select_db("ases1") or die(mysql_error());

   $count=mysql_query('SELECT * from question_table');

 
 //$cou= mysql_fetch_assoc ($count);
  
  //$cek=0;
   

 $row = mysql_fetch_array($count) ;
		{
			 
			echo   $row[0]  ;
			
	    
			  
		}

 //mysql_close($connection); 

 }
?>




function partnext()
{
//alert($("#question_no").val()+".1");
var temp=$("#question_no").val();
var len=temp.length;
var arr=temp.split('.');
var last=arr[arr.length-1];
if(last>0)
{last++;}
var newno="";
for(i=0;i<arr.length-1;i++)
{
newno+=arr[i]+".";
}
newno=newno+last;
$("#question_no").val(newno);}




function partprevious()
{

var temp=$("#question_no").val();
var len=temp.length;
var arr=temp.split('.');
var last=arr[arr.length-1];
if(last>1)
{last--;}
var newno="";
for(i=0;i<arr.length-1;i++)
{
newno+=arr[i]+".";
}
newno=newno+last;
$("#question_no").val(newno);
}


function partincrease()
{

 
//alert($("#question_no").val()+".1");
var temp=$("#question_no").val()+".1";
$("#question_no").val(temp);

}



function partdecrease()
{
//alert($("#question_no").val()+".1");
var temp=$("#question_no").val();
var f=temp.length;

$("#question_no").val(temp.substring(0,f-2));
}
