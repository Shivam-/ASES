	<?php
	require('db_connect.php');
	require('auth.php');
	// Create object of db_connect
	$db_connect = new db_connect();
	// Create object of auth
	$auth = new auth();
	$username = $_POST['ID'];
	$password = $_POST['PASSWD'];
	echo $login_result = $auth->login($db_connect,$username,$password);
	/*
	if ($login_result==true) {
		// Login successful
		echo "login succesful";
	}else{
		echo "Login fail";
	}
	*/
?>