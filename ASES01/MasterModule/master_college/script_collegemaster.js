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
var college_code = $("#college_code").val();
var clg_name = $("#clg_name").val();
var clg_address_line = $("#clg_address_line").val();
var clg_mail = $("#clg_mail").val();
var clg_contact = $("#clg_contact").val();
var clg_director = $("#clg_director").val();
var clg_state_id = $("#clg_state_id").val();
var clg_pincode = $("#clg_pincode").val();
var clg_city_id = $("#clg_city_id").val();
var clg_country_id = $("#clg_country_id").val(); 
var formload = $("#formLoad").val(); 
var dataString = 'college_code1='+ college_code + '&clg_name1='+ clg_name + '&clg_address_line1='+ clg_address_line + '&clg_mail1='+ clg_mail+ '&clg_contact1='+ clg_contact+ '&clg_director1='+ clg_director+ '&clg_state_id1='+ clg_state_id+ '&clg_pincode1='+ clg_pincode+ '&clg_city_id1='+ clg_city_id+ '&clg_country_id1='+ clg_country_id+ '&is_active1='+ is_active;

if(college_code==''||clg_name==''||clg_address_line==''||clg_mail==''||clg_contact==''||clg_director==''||clg_state_id==''||clg_pincode==''||clg_city_id==''||clg_country_id==''||is_active>1||is_active<0) 
{     
swal("Please Fill All Fields"," ","error") 
}
 else
 if(formload==1)
{
	// AJAX Code To Alter Form.
$.ajax({
type: "POST",
url: "alter_college_master.php",
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
url: "entry_college_master.php",
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
 