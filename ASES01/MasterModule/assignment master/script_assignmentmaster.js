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

	 
});	
 

//$("#submit").click(function(){
document.querySelector('button#submit').onclick = function(){	  
var faculty_name = $("#faculty_name").val();
var assignment_id = $("#assignment_id").val();
var submission_date = $("#submission_date").val();
var issue_date = $("#issue_date").val();
var creation_date = $("#creation_date").val();
var max_marks = $("#max_marks").val();
var passing_marks = $("#passing_marks").val();
var assignment_topic = $("#assignment_topic").val();
var subject_name = $("#subject_name").val();
var session_from = $("#session_from").val();

var formload = $("#formLoad").val(); 
 
   
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'department_id='+ department_id + '&department_name='+ department_name + '&department_abbreviation='+ department_abbreviation + '&have_branches='+ have_branches + '&is_active='+ is_active;

if(department_id==''||department_name==''||department_abbreviation=='') 
{     
swal("Please Fill All Fields"," ","error") 
}
 else
 if(formload==1)
{
	// AJAX Code To Alter Form.
$.ajax({
type: "POST",
url: "alter_department_master.php",
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
url: "entry_department_master.php",
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