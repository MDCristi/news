<?php
	
	$decision = 0;
	if(isset($_POST['site_address']) && !empty($_POST['site_address'])){
		$s_address = $_POST['site_address'];
		$decision++;
	}
	else {
		$page_content .= 'completeaza campul adresa';
	}
	
	if(isset($_POST['site_theme'])){
		$s_theme = $theme_db[$_POST['site_theme']];
		$decision++;
	}
	else {
		$page_content .= 'alege o tema';
	}
	
	if(2 === $decision){
		include 'insertion.php';
		$page_content .= '<meta HTTP-EQUIV="REFRESH" content="0; url=?show=site_settings">';
	}