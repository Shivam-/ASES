$(document).ready(function(){


// subdec
$("#subdec").click(function(){
var btn="subdec";
subdec();
var question_no = $("#question_no").val();
var datano='no='+question_no;
findshow(datano);
 });


// subadd
$("#subadd").click(function(){
var btn="subadd";
var temp=$("#question_name").val()
if(String.trim(temp)=='')
{
swal("Please Fill All Fields"," ","error") ;
$("#question_name").val("");
}
else{
var question_no = $("#question_no").val();
var datano='no='+question_no;
saveornot(datano,btn);
}
});



// prebtn
$("#prebtn").click(function(){
var btn ="pre";
prepart();
var question_no = $("#question_no").val();
var datano='no='+question_no;
findshow(datano);
 });



function matchshowvalid(data,valid,btn)
{
var question_no = $("#question_no").val();
if(valid==1)
{
if(btn=="subadd")
{
subadd();
}

if(btn=="next")
{
increaseno();
}
var question_no = $("#question_no").val();
var datano='no='+question_no;

findshow(datano);
}
else
{
swal({   title: "Are you sure?",   text: "Question will not be saved",   type: "warning",   showCancelButton:false});
}

}



// nextbtn
$("#nextbtn").click(function(){
var btn ="next";
var temp=$("#question_name").val()
if(String.trim(temp)=='')
{
swal("Please Fill All Fields"," ","error") ;
$("#question_name").val("");
}
else{
var question_no = $("#question_no").val();
var datano='no='+question_no;
saveornot(datano,btn);
}
});


// save btn

$("#savebtn").click(function(){

var btn ="save";
var question_no = $("#question_no").val();
var question_name = $("#question_name").val();
var max_marks = $("#max_marks").val();
 // Returns successful data submission message when the entered information is stored in database.
var dataString = 'question_no1='+ question_no + '&question_name1='+ question_name + '&max_marks1='+ max_marks;
var datano='no='+question_no;

if(question_no==''||question_name==''||max_marks=='') 
{    
swal("Please Fill All Fields"," ","error") ;
}
else
{
$.ajax({
type: "POST",
url: "findno1.php",
data:datano,
cache: false,
success: function(data){
 
 var h=String.trim(data);
 var result=h.split('##');
 var ques=result[0];
 var valid=result[1];
 
 matchno(ques,dataString,btn);
   
}


});
 
}
});

// no exist or not in database

function matchno(data,dataString,btn)
{
var question_no = $("#question_no").val();
var question_no=question_no.toString();

if(String.trim(data)==question_no)
{

if(question_no!=''||question_name!=''||max_marks!='') 
{ 

alter(dataString);
}
else{
swal("Please Fill All Fields"," ","error") ;
}


}
else
{

	// AJAX Code To entry Form.
$.ajax({
type: "POST",
url: "entry_assignmentcreation.php",
data: dataString,
cache: false,
success: function(result){
swal(result," ","success") ;

}

});

}



}
// find no in database
function findshow(datano)
{
$.ajax({
type: "POST",
url: "findno1.php",
data:datano,
cache: false,
success: function(data){

var result=data.split('##');
 var ques=result[0];
 var valid=result[1];

 matchshow(ques,valid);

   
}


});
}

function matchshow(data,valid)
{
var question_no = $("#question_no").val();
if(valid==1)
{

var question_no = $("#question_no").val();
var datano='no='+question_no;
show(datano);

}

else
{

$("#question_name").val("");
}

}


// to next increase no
function increaseno()
{
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
$("#question_no").val(newno);

}

// for pre

function prepart()
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

function subadd()
{

var temp=$("#question_no").val()+".1";
$("#question_no").val(temp);
}



function subdec()
{

var temp=$("#question_no").val();

var f=temp.length;
if(f!=1)
{
$("#question_no").val(temp.substring(0,f-2));}
}

// alter
function alter(dataString)
{
$.ajax({
type: "POST",
url: "alter_assignmentcreation.php",
data: dataString,
cache: false,
success: function(result){
swal(result," ","success") ;

}

});
}

// for show
function show(dataString)
{
$.ajax({
type: "POST",
url: "show_question1.php",
data: dataString,
cache: false,
success: function(result){
showform(result);


}

});

}

// to print in

function showform(result)
{

var seprate=result.split('##');
i=0;
while(i<seprate.length)
{
var x=seprate[i].toString();
var x=String.trim(x);
$("#question_no").val(x);
i++;
var x=seprate[i].toString();
$("#question_name").val(x);
i++;
var x=seprate[i].toString();
$("#max_marks").val(x);
i++;
}

}
// to check current question is save ora not
function saveornot(datano,btn)
{

$.ajax({
type: "POST",
url: "findno1.php",
data:datano,
cache: false,
success: function(result){

 var h=String.trim(result);

 var result=h.split('##');
 var ques=result[0];
 var valid=result[1];

 matchshowvalid(h,valid,btn);
   
}
});

}
});
 