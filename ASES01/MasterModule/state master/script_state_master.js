$(document).ready(function(){
var is_active = 0;
var formload=0;	
alert("hahapoo");
$(document).on('click','#is_active_yes',function(){
	is_active = 1;
	   

});	
$(document).on('click','#is_active_no',function(){
	is_active = 0;
	 
});	
 

//$("#submit").click(function(){
document.querySelector('button#submit').onclick = function(){
 
 alert(is_active);
 alert("FORM"+formload);
var state_name = $("#state_name").val();
var state_id=$("#state_id").val();
var country_id=$("#country_id").val();
 formload = $("#formLoad").val();   
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&state_name='+ state_name +'&state_id='+ state_id+'+country_id='+country_id+'&is_active='+ is_active;
 
if(state_name=='' ||state_id=='' ||country_id=='')
{

swal("Please Fill All Fields"," ","error") 
}
else
if(formload==1)
{
	// AJAX Code To Alter Form.
$.ajax({
type: "POST",
url: "alter_state_master.php",
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
url: "entry_state_master.php",
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
 



























 