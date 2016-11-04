<?php
	$host="localhost";
	$db_user="root";
	$db_pass="roots";
	$db_name = "attendance";
	//connecting to the mysql server
	$connect = mysql_connect($host,$db_user,$db_pass);
	//checking whether the connection is successful or not
	if($connect){
		//connection successful so now connecting to database
		$db_connect=mysql_select_db($db_name);
		//again checking whether the db is selected or not
		if($db_connect){
			
		}
			
	}
	else{
		echo "Sorry connection error";
		die();
	}
?>