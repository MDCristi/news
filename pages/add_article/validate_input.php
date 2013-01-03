<?php

	/**
	 * 	Comentariile vor fia daugate in curand
     * deocamdata scriptul are brese mari de securitate, lucrez la ele
     */	 
	 
	 if(isset($_POST['submit'])){
		
		$mesaj = '';
		$decision = 0;
		
		//validarea campului numele articolului
		if(isset($_POST['article_name']) && !empty($_POST['article_name'])){
			$name = $_POST['article_name'];
			$decision += 1;
		} else {
			$mesaj .= 'completeaza campul "Numele articolului"<br/>';
		}
		
		//validarea campului regiune
		if(isset($_POST['article_region']) && !empty($_POST['article_region'])){
			$region = $_POST['article_region'];
			$decision += 1;
		} else {
			$mesaj .= 'terugam sa alegi regiunea<br/>';
		}
		
		//validarea campului localitate
		if(isset($_POST['article_city']) && !empty($_POST['article_city'])){
			$city = $_POST['article_city'];
			$decision += 1;
		} else {
			$mesaj .= 'Completeaza campul localitate<br/>';
		}
		
		
		//validarea campului Continut
		if(isset($_POST['article_content']) && !empty($_POST['article_content'])){
			$content = $_POST['article_content'];
			$decision += 1;
		} else {
			$mesaj .= 'Completeaza campul continut<br/>'; 
		}
		
		if(isset($_FILES['article_photos']) && UPLOAD_ERR_OK === $_FILES['article_photos']['error']){
			if(file_can_be_uploaded($_FILES['article_photos'])){
				$decision += 1;
			} else {
				$mesaj .= 'fisierul nu poate fi uploadat<br/>';
			}
		} 
		
		// luam decizia daca postam articolul in db		
		if(4 === $decision){
			include 'insert_article.php';
			
		} else if( 5 === $decision) {
			include 'insert_article.php';
			include 'upload.php';
		}
		$page_content .= $mesaj;
	 }