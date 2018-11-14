<?php
	require 'incudes/db.php';
	if (isset( $_SESSION['logged_user'])) {
	echo $_SESSION['logged_user']->login_user ;
	echo "<br>";
	echo"Your name: "; 
	echo $_SESSION['logged_user']->name_user ;
	echo "<br>";
	echo"Your age: "; 
	echo $_SESSION['logged_user']->age_user ;
}
?>