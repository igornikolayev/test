<?php 
	require 'incudes/db.php';
	$data=$_POST;
	if (isset($data['log_in'])) 
	{
		$userfind= R::findOne('users', 'login_user=?', array($data['loginUser']));
		$errors=array(); //array of errors
		if($userfind)
		{
			// login does exist
			if(password_verify($data['passUser'], $userfind->pass_user))
			{
				$_SESSION['logged_user']=$userfind;
				header('Location: information.php');
			}
			else{
				$errors[]="Wrong password";
			}
		}
		else{
			$errors[]="There is no user with the same login";
		}
		
	}
	if (isset($data['sign_up'])) 
	{
		header('Location: registration.php');
	}
	
?>