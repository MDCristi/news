<?php
	
	$page_content = '';
	// validam inputul
	include 'validate_input.php';
	
	// generam formularul pentru articol
	$page_content .= generate_article_form();