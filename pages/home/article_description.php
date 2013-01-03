<?php

	$main_db = include __MAINDB__;
	if(isset($_SESSION['logat']) && TRUE === $_SESSION['logat']['is_admin']){
		$permision = 'a';
	} 
	else if(isset($_SESSION['logat']) && FALSE === $_SESSION['logat']['is_admin']){
		$permision = 'u';
	}
	else {
		$permision = 'v';
	}
	$comments = include __COMMENTSDB__; 
	
	if(isset($_GET['remove']) && isset($_SESSION['logat']) && TRUE === $_SESSION['logat']['is_admin']){
		include 'remove_message.php';		
	}
	
	if(isset($_POST['submit_comment'])){
		include 'add_comment.php';
	}
		
	// de adaugat si paramteru cu statutul userului pentru a dac poate edita sau sterge articolul sau mesajele din acel articol	
	$page_content .= $mesaj;
	$page_content .= display_article($main_db[$_GET['id']]);
	$page_content .= display_article_comments($comments[$_GET['id']], $permision, $_GET['id']);
	
	if(isset($_SESSION['logat'])){
		$page_content .= generate_comment_form();
	}
	
