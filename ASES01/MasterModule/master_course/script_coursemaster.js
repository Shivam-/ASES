$(document).ready(function(){
var is_active = 1;
var have_branches=1;
   var formload=0;
$(document).on('click','#is_active_yes',function(){
	is_active = 1;
	});	
$(document).on('click','#is_active_no',function(){
	is_active = 0;
	});	
 $(document).on('click','#have_branches_yes',function(){
	have_branches= 1;
	 
	});	
$(document).on('click','#have_branches_no',function(){
	have_branches= 0;
	 
});	
 

//$("#submit").click(function(){
document.querySelector('button#submit').onclick = function(){	  
var course_id = $("#course_id").val();
var course_name = $("#course_name").val();
var course_abbreviation = $("#course_abbreviation").val();
var formload = $("#formLoad").val(); 
 
   
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'course_id='+ course_id + '&course_name='+ course_name + '&course_abbreviation='+ course_abbreviation + '&have_branches='+ have_branches + '&is_active='+ is_active;

if(course_id==''||course_name==''||course_abbreviation=='') 
{     
swal("Please Fill All Fields"," ","error") 
}
 else
 if(formload==1)
{
	// AJAX Code To Alter Form.
$.ajax({
type: "POST",
url: "alter_course_master.php",
data: dataString,
cache: false,
success: function(result){
result = result.split(',');
result1=result[0];
flag=result[1];
if(flag==1)
{swal(result1," ","success") }
else
{swal(result1," ","error")}
}
});
}
else  
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "entry_course_master.php",
data: dataString,
cache: false,
success: function(result){
result = result.split(',');
result1=result[0];
flag=result[1];
if(flag==1)
{swal(result1," ","success") }
else
{swal(result1," ","error")}
}
});
}
return false;
};

});
 