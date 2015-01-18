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
document.querySelector('button#submit').onclick = function(){
 
 
var country_name = $("#country_name").val();
var country_id=$("#country_id").val();
 formload = $("#formLoad").val();   
 
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&country_name='+ country_name +'&country_id='+ country_id+'&is_active='+ is_active;
 
if(country_name=='' ||country_id=='')
{
swal("Please Fill All Fields"," ","error") 
}
else
if(formload==1)
{
	// AJAX Code To Alter Form.
$.ajax({
type: "POST",
url: "alter_country_master.php",
data: dataString,
cache: false,
success: function(result){
swal(result," ","success") 
}
});
}
else  
{alert(formload)
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "entry_country_master.php",
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
 



























 