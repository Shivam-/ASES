$(document).ready(function(){
var is_active = 1;
var is_elective= 1;
   var formload=0;
   
 $(document).on('click','#is_elective_yes',function(){
	is_elective = 1;
	
});	
$(document).on('click','#is_elective_no',function(){
	is_elective = 0;
	
});	

$(document).on('click','#is_active_yes',function(){
	is_active = 1;
	
});	
$(document).on('click','#is_active_no',function(){
	is_active = 0;
	
});	
 
document.querySelector('button#submit').onclick=function () {
var subject_id = $("#subject_id").val();
var subject_name = $("#subject_name").val();
var subject_code = $("#subject_code").val();
var subject_abbreviation = $("#subject_abbreviation").val();
var course_id = $("#course_id").val();
var branch_id = $("#branch_id").val();
var semester_id = $("#semester_id").val();
var type1 = $("#type").val();
var max_marks = $("#max_marks").val(); 
var formload = $("#formLoad").val();


   
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&subject_id='+subject_id+'&subject_name='+subject_name+'&subject_code='+subject_code+'&subject_abbreviation='+subject_abbreviation+'&course_id='+course_id+'&branch_id='+branch_id+'&semester_id='+semester_id+'&type='+type1+'&max_marks='+max_marks+'&is_elective='+is_elective+'&is_active='+ is_active;

if(subject_id==''||subject_name==''||subject_code==''||subject_abbreviation==''||course_id==''||branch_id==''||semester_id==''||type1==''||max_marks=='') 
{     
swal("Please Fill All Fields"," ","error") ;
}
 else
 if(formload==1)
{
	// AJAX Code To Alter Form.
$.ajax({
type: "POST",
url: "alter_subject_master.php",
data: dataString,
cache: false,
success: function(result){
swal(result," ","success");
}
});
}
else  
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "entry_subject_master.php",
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
 