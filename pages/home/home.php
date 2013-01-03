<?php 
	
	$mesaj = '';
	$page_content = '';
	$articles = '<table class="articles">';
	if(isset($_POST['top_w'])){
		//include 'iterate_top_w.php';
	} else {
		include 'iterate_top_n.php';
	}
	
	if(isset($_POST['top_n'])){
		include 'iterate_top_n.php';
	}
	
	// de implementata functia article exists, care vrrifica daca exista articolul cu id-ul respectiv
	if(isset($_GET['id'])){
		include 'article_description.php';
	}
	else {
		$page_content .= generate_users_options_form();
		$page_content .= $articles;
	}
	