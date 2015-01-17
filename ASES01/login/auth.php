<?php
	 
	/**
	*Class responsible for login check 
	*/

	require('sessions.php');
	class auth
	{
		
		// Create db connection first

		function login($db,$email,$password)
		{
			// 1. Checking if too amny attempts
			// 2. checking username and password in db
			// Check in mst_college_info table
			$login_check_college_query = "SELECT `college_code`,`is_active` FROM `mst_college_info` WHERE `clg_mail`='$email' AND `clg_password`='$password';";
			$login_check_user_query    = "SELECT `usr_id`,`is_active`,`usr_type_id` FROM `mst_user` WHERE `usr_mail`='$email' AND `usr_password`='$password';";
			//Run query for college table
			$login_result = $db->run_single($login_check_college_query);
			$login_result_2 = $db->run_single($login_check_user_query);
			if ($login_result['college_code']=='' && $login_result_2['usr_id']=='') 
			{	
				// Username Or Password Are Wrong
				echo "Username Or Password Are Wrong";
			}else
			{
				// Check is active or not
				if ($login_result['is_active']==0 && $login_result_2['is_active']==0) 
				{
					// College is not activated
					echo "You is not activated";
				}else
				{
					// Login successful but who? college or user(faculty or student)
					if ($login_result['college_code'] !='') 
					{
						// It is a college
						//Start session for college
						$user_type = 'college';
						secure_session_start($user_type);
					}else
					{
						//It is faculty or student (check it)
						if ($login_result_2['usr_type_id']==1) {
							// Faculty
							$user_type = 'faculty';
							secure_session_start($user_type);
						}else{
							$user_type = 'student';
							secure_session_start($user_type);
						}
					}
				}
			}
		}
	}
?>