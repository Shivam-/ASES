$(document).ready(function(){
var is_active = 1;
var formload=0;	

$(document).on('click','#is_active_yes',function(){
	is_active = 1;
	
});	
$(document).on('click','#is_active_no',function(){
	is_active = 0;
	 
});	
document.querySelector('button#submit').onclick = function(){ 
var doc_name = $("#doc_name").val();
var doc_id=$("#doc_no").val();
formload = $("#formLoad").val();   
 
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&doc_name='+doc_name +'&doc_id='+doc_id+'&is_active='+is_active; 
if(doc_name=='' ||doc_id=='')
{
swal("Please Fill All Fields"," ","error") 
}
else
if(formload==1)
{
	// AJAX Code To Alter Form.
$.ajax({
type: "POST",
url: "alter_doc_master.php",
data: dataString,
cache: false,
success: function(result){
swal(result," ","success") 
}
});
}
else  
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "entry_doc_master.php",
data: dataString,
cache: false,
success: function(result){
swal(result," ","success") 
}
});
}
return false;
};

});
 



























 


























 