<?php  
	require_once 'incudes/db.php';
	$users=R::find('users',"login_user>?", array(''));
	foreach ($users as $user) {
	echo $user->login_user."<br>";
	}
?>