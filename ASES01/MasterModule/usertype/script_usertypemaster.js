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
	  
var type_id = $("#type_id").val();
var type_name = $("#type_name").val();

var formload = $("#formLoad").val(); 
 
   // Returns successful data submission message when the entered information is stored in database.
var dataString = 'type_id1='+ type_id + '&type_name1='+ type_name +'&is_active1='+ is_active;
alert (dataString);
 alert("Form:"+formload);
if(type_id==''||type_name==''||is_active>1||is_active<0) 
{    
alert("Please Fill All Fields");
}
 else
 if(formload==1)
{
	// AJAX Code To Alter Form.
$.ajax({
type: "POST",
url: "alter_usertype_master.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
else  
{
// AJAX Code To Submit Form.
$.ajax({
type: "POST",
url: "entry_usertype_master.php",
data: dataString,
cache: false,
success: function(result){
alert(result);
}
});
}
return false;
});

});
 