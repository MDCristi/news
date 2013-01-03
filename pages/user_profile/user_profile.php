<?php
	
	$page_content = '';
		
	if(isset($_GET['id']) && $_GET['id'] !== ''){
		$id = $_GET['id'];
		$users_db = include __USERSDB__;
		$username = $users_db[$id]['username'];
		$password = $users_db[$id]['password'];
		$city = $users_db[$id]['city'];
		$region = $users_db[$id]['region'];
		$sex = $users_db[$id]['sex'];
		$email = $users_db[$id]['email'];
		$avatar = $users_db[$id]['avatar'];
		$age = $users_db[$id]['age'];
		
		
		$page_content .= display_user_data($username, $password, $city, $region, $sex, $email, $avatar, $age);
		$page_content .= display_user_activity($id, $users_db);
	}
	else {
		$page_content .= '<center><b>salut amice, nu ne este foarte clar al carui user profil vrei sa-l vezi</b></center>';
	}