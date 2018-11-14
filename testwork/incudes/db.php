
<?php 
//connect with database
	require 'rb.php';
	R::setup( 'mysql:host=localhost; dbname=data' ,'root', '1234' ); 
	session_start();
?>