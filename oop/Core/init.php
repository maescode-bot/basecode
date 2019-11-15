<?php 
	session_start();
	$GLOBALS['config'] = 
	array(
		'mysql' =>array(
				'host'=>'Host_Name',
				'username'=>'root',
				'password'=>"",
				'db'=>'Database_Name'
			),
		'session'=>array(
			'session_name'=>'user',
			)
	);
	spl_autoload_register(
		function($class) {
			require_once 'Classes/'.$class.'.php';
		}
	);
	require_once('Functions/sanitize.php');
?>
