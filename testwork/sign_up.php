<?php
	require 'incudes/db.php'; 
	$data=$_POST;
	if (isset($data['signup'])) {
		$errors=array(); //array of errors
		
		if ($data['loginUser']=='' ) {
			$errors[]='input login';
		}
		if ($data['passUser']=='' ) {
			$errors[]='input password';
		}
		if ($data['nameUser']=='' ) {
			$errors[]='input name';
		}
		if ($data['ageUser']=='' ) {
			$errors[]='input age';
		}
		
		if(R::count('users', 'login_user=?', array($data['loginUser']))>0)
		{
			$errors[]='there is user with the same login';
		}
		if (empty($errors)){
			//registration
			$user=R::dispense('users');
			$user->nameUser=$data['nameUser'];
			$user->ageUser=$data['ageUser'];
			$user->loginUser=$data['loginUser'];
			$user->passUser=password_hash($data['passUser'], PASSWORD_DEFAULT);
			R::store($user);
			header('Location: index.php');

		}

	}
?>