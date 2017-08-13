<?php
//localhost configuration


	$db_server = '127.0.0.1';
	$db_username = 'root';
	$db_password = '';
	$db_database = 'Sethupathi'; //enter the databse name


//main server configuration
 
	$db = mysqli_connect($db_server, $db_username, $db_password, $db_database);

	if(!$db){ die ("Connection failed : " . mysqli_connect_error());
}
?>
