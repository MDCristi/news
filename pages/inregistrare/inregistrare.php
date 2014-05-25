<?php

	$page_content = '';
	// de lucart major la securitate, in momentul de fata este la pamant
	if(isset($_POST['submit'])){
		
		$mesaj = '';
		$decision = 0;
		$users_db = include __USERSDB__;
		
		if(isset($_POST['username']) && !empty($_POST['username'])){
			if(!check_if_username_exists($_POST['username'], $users_db)){
				$username = $_POST['username'];
				$decision += 1;
			} 
			else {
				$mesaj .= 'username-ul este luat deja';
			}			
		} 
		else {
			$mesaj .= 'completeaza campul username <br/>';
		}
		
		if(isset($_POST['password']) && !empty($_POST['password'])){
			$password = $_POST['password'];
			$decision += 1;
		} 
		else {
			$mesaj .= 'completeaza campul password <br/>';
		}
		
		if(isset($_POST['article_region'])){
			$region = $_POST['article_region'];
			$decision += 1; 
		}
		else {
			$mesaj .= 'alege-ti judetul in care locuiesti<br/>';
		}
		
		if(3 === $decision){
			include 'insertion.php';
			$page_content .= '<b>te-ai inregistrat</b><meta http-equiv="refresh" content="4; url=http://'.__ADDRESS__.'">';
		}
	$page_content .= $mesaj;
	
	}
	$page_content .= generate_registration_form();
