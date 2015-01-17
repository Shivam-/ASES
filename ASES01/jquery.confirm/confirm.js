// JavaScript Document

$(document).ready(function() {
						   
						   
$('a.but').click(function() {
var confirmBox = $(this).attr('href');
$(confirmBox).fadeIn(300);
	$('body').append('<div id="confirmOverlay"></div>');
		$('#confirmOverlay').fadeIn(300);
return false;
            });

$('#no').click(function() {
$('#confirmOverlay , .confirmBox').fadeOut(300, function() {
$('#confirmOverlay').remove();
});
return false;
            });


		  
								  
            
			
			});