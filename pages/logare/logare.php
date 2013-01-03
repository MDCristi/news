<?php

	//DE EXTINS VERIFICAREA!!	
	$page_content = '';
	if(isset($_POST['submit'])){
		$main_db = include __USERSDB__;
		$mesaj = '';
		$decision = 0;
				
		if(isset($_POST['username']) && !empty($_POST['username'])){
			$decision += 1;
		}
		else {
			$mesaj .= 'completeaza campul Username<br/>';
		}
		
		if(isset($_POST['password'])  && !empty($_POST['password'])){
			if(is_numeric($username = user_data_exists_and_match($_POST['username'], $_POST['password'], $main_db))){
				$password = $_POST['password'];
				$decision += 1;
			} 
			else {
				$mesaj .= 'numele de utilizator si parola nu se potrivesc<br/>';
			}
		} 
		else {
			$mesaj .= 'completeaza campul parola<br/>';
		}
		
		if(isset($_POST['remember_me'])){
			$decision += 1;
		}
		
		if($decision >= 2){
			include 'initialize_session_vars.php';
		} 
		
		$page_content .= $mesaj;
	}	
	$page_content .= generate_login_form();
	