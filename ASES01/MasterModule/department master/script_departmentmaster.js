$(document).ready(function(){
var is_active = 1;
   var formload=0;
$(document).on('click','#is_active_yes',function(){
	is_active = 1;
	 

});	
$(document).on('click','#is_active_no',function(){
	is_active = 0;
	  
});	
 

$("#submit").click(function(){
var dept_id = $("#dept_id").val();
var dept_name = $("#dept_name").val();
var dept_abbriviation = $("#dept_abbriviation").val();
var formload = $("#formLoad").val(); 
 
   // Returns successful data submission message when the entered information is stored in database.
var dataString = 'dept_id1='+ dept_id + '&dept_name1='+ dept_name + '&dept_abbriviation1='+ dept_abbriviation + '&is_active1='+ is_active;
//alert (dataString);
 //alert("Form:"+formload);
if(dept_id==''||dept_name==''||dept_abbriviation==''||is_active>1||is_active<0) 
{    
alert("Please Fill All Fields");
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
alert(result);
document.location.reload(true);
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
alert(result);
document.location.reload(true);
}
});
}
return false;
});

});
 