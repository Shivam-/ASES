$(document).ready(function(){
var is_active = 1;
   var formload=0;
$(document).on('click','#is_active_yes',function(){
	is_active = 1;

		});	
$(document).on('click','#is_active_no',function(){
	is_active = 0;
		});	
		//$("#submit").click(function(){
document.querySelector('button#submit1').onclick = function(){	  
var course_id = $("#branch_id").val();
var course_name = $("#branch_name").val();
var course_abbreviation = $("#branch_abbriviation").val();
var course_name = $("#course_name").val();
var sections =$("#sections").val();
var formload = $("#formLoad").val(); 
 
// Returns successful data submission message when the entered information is stored in database.
//var dataString = 'branch_id='+ branch_id + '&branch_name='+ branch_name + '&branch_abbreviation='+ branch_abbreviation + '&course_name='+ course_name + '&sections='+ sections+ '&is_active='+ is_active;

   
if(branch_id==''||course_name==''||branch_name==''||branch_abbreviation==''||sections=='') 
{  //alert("Please fill all the fields"); 
swal("Please Fill All Fields"," ","error") 
}
 else
 
 if(formload==1)
{
	// AJAX Code To Alter Form.
$.ajax({
type: "POST",
url: "alter_branch_master.php",
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
url: "entry_branch_master.php",
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
 