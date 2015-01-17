<?php
	/**
	* Session handler
	*/
	
		function secure_session_start($user_type)
		{
			session_start();
			$_SESSION['user_type'] = $user_type;
			header("Location:../home/home.html");
			die();
		}
		function secure_ss()
		{
			session_start();
			return $user_type = $_SESSION['user_type'];
		}
	
?>