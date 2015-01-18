$(document).ready(function(){
var is_active = 1;
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
var usr_id = $("#usr_id").val();
var f_name = $("#f_name").val();
var m_name = $("#m_name").val();
var l_name = $("#l_name").val();
var p_addr_line = $("#p_addr_line").val();
var c_addr_line = $("#c_addr_line").val();
var p_state_id = $("#p_state_id").val();
var p_country_id = $("#p_country_id").val();
var p_city_id = $("#p_city_id").val();
var c_state_id = $("#c_state_id").val();
var c_city_id = $("#c_city_id").val();
var c_country_id = $("#c_country_id").val();
var p_pincode = $("#p_pincode").val();
var c_pincode = $("#c_pincode").val();
var father_name = $("#father_name").val();
var mather_name = $("#mather_name").val();
var usr_password = $("#usr_password").val();
var date_of_joining = $("#date_of_joining").val();
var date_of_birth = $("#date_of_birth").val();
var usr_type_id = $("#usr_type_id").val();
var dept_id = $("#dept_id").val();
 var usr_mail = $("#usr_mail").val();
var formload = $("#formLoad").val(); 
 
   
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'usr_id='+ usr_id + '&f_name='+ f_name + '&p_country_id='+ p_country_id + '&m_name='+ m_name + '&c_state_id='+ c_state_id+ '&p_pincode='+ p_pincode+ '&mather_name='+ mather_name+ '&date_of_birth='+ date_of_birth+ '&usr_mail='+ usr_mail+ '&dept_id='+ dept_id+ '&usr_type_id='+ usr_type_id+ '&p_state_id='+ p_state_id+ '&c_pincode='+ c_pincode+ '&usr_password='+ usr_password+ '&date_of_joining='+ date_of_joining+ '&l_name='+ l_name+ '&p_addr_line='+ p_addr_line+ '&c_addr_line='+ c_addr_line+ '&c_country_id='+ c_country_id+ '&p_city_id='+ p_city_id+ '&c_city_id='+ c_city_id+ '&father_name='+ father_name+ '&is_active='+ is_active;																																																																																																																																								

if(f_name==''||m_name==''||usr_id==''||l_name==''||p_addr_line==''||c_addr_line==''|| p_country_id==''||p_city_id==''||mather_name==''c_state_id==''||'c_pincode==''||father_name==''||mather_name==''p_pincode==''||c_country_id==''||p_state_id==''usr_mail==''||date_of_joining==''||date_of_birth==''usr_password==''||dept_id==''||usr_type_id=='') 
{     
swal("Please Fill All Fields"," ","error") 
}
 else
 if(formload==1)
{
	// AJAX Code To Alter Form.
$.ajax({
type: "POST",
url: "alter_user_master.php",
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
url: "entry_user_master.php",
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