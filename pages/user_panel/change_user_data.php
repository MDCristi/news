<?php
		
	if(isset($_POST['submit'])){
		$decision = 0;
		$mesaj = '';
		
		// parola
		if(isset($_POST['password']) && !empty($_POST['password']) && strlen($_POST['password']) > 5){
			$decision++;
			$password = $_POST['password'];
		}
		else {
			$mesaj .= 'n-ai completat cum trebuie campul Password<br/>';
		}
		// judetul
		if(isset($_POST['article_region']) && !empty($_POST['article_region'])){
			$decision++;
			$region = $_POST['article_region'];
		} 
		else {
			$mesaj .= 'completeaza corespunzator campul region<br/>';
		}
		//orasul
		if(isset($_POST['city']) && !empty($_POST['city'])){
			$decision++;
			$city = $_POST['city'];
		}
		else {
			$mesaj .= 'te rog sa completezi corespunzator campul City<br/>';
		}
		//sexul
		if(isset($_POST['sex']) && !empty($_POST['sex'])){
			$decision++;
			$sex = $_POST['sex'];
		} 
		else {
			$mesaj .= 'te rog sa completezi corespunzator campul sex';
		}
		
		//email-ul
		if(isset($_POST['email']) && !empty($_POST['email']) && strlen($_POST['email']) > 6){
			$decision++;
			$email = $_POST['email'];
		} 
		else {
			$mesaj .= $_POST['email'];
		}
		//varsta
		if(isset($_POST['age']) && !empty($_POST['age']) && strlen($_POST['age'])> 1){
			$decision++;
			$age = $_POST['age'];
		}
		else {
			$mesaj .= 'completeaza corespunzator campul age<br/>';
		}
		
		
		if( 6 === $decision){
			include 'insertion.php';
		}
		$page_content .= $mesaj;
	}	