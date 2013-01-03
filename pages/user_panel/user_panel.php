<?php
	
	// de implementata acea optiunea ca atunci cand un user posteaza sai se adauge si in profilul lui cele mai recente articole
	$page_content = '';
	$id = $_SESSION['logat']['id'];
	$users_db = include __USERSDB__;
	$username = $users_db[$id]['username'];
	$password = $users_db[$id]['password'];
	$city = $users_db[$id]['city'];
	$region = $users_db[$id]['region'];
	$sex = $users_db[$id]['sex'];
	$email = $users_db[$id]['email'];
	$avatar = $users_db[$id]['avatar'];
	$age = $users_db[$id]['age'];
	
	
	if(isset($_GET['change_data']) && 'true' === $_GET['change_data'] && isset($_SESSION['logat'])){
		include 'change_user_data.php';
		$page_content .= change_user_data_form($username, $password, $city, $region, $sex, $email, $avatar, $age);
	} else {
		$page_content .= '<center><a href="?show=user_panel&change_data=true"> editeaza date</a></center>';
		$page_content .= display_user_data($username, $password, $city, $region, $sex, $email, $avatar, $age);
	}	
	// aminteste-ti ca odata cu actualizarea datelor trebuie actualizate si datele din sessiunea(unele) si schimba partea
	// aia stupida cu editarea usernameului, e cretin
	
	$page_content .= display_right_panel();
	
	if(TRUE === $_SESSION['logat']['is_admin']){
		$page_content .= display_admin_panel();
	}	
	$page_content .= display_user_activity($id, $users_db);