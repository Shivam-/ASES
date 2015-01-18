





// This is the twitter Popup code section
$(document).ready(function() {
	$('a.login-window').click(function() {
		//Getting the variable's value from a link 
		var loginBox = $(this).attr('href');

		//Fade in the Popup
		$(loginBox).fadeIn(300);
                
                	// Add the mask to the body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);

		return false;
            });
           $('a.register-window').click(function() {
		//Getting the variable's value from a link 
		var registerBox = $(this).attr('href');

		//Fade in the Popup
		$(registerBox).fadeIn(300);
                
                	// Add the mask to the body
		$('body').append('<div id="mask"></div>');
		$('#mask').fadeIn(300);

		return false;
            });
    
// When clicking on the close button or the mask layer the popup is closed
	$('a.tweet-close').live('click', function() {
		$('#mask , .login').fadeOut(300, function() {
			$('#mask').remove();
		});
		return false;
	});

		
	
	
});
