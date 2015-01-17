<?php
	/**
	* Class Responsible for all database connectivity
	*/
	class db_connect
	{
		
		function __construct()
		{
			$db_host = "localhost";
			$db_name = "ases1";
			$db_password = "";
			$db_user = "root";
			// Connect to db
			if(!mysql_connect($db_host,$db_user,$db_password) || !mysql_select_db($db_name))
			{
				die("DB connection problem!");
			}
		}

		// Other functions for query
		// Run single row query
		function run_single($query)
		{
			$query_run = mysql_query($query);
			return mysql_fetch_array($query_run);
		}
	}
?>