<?php	$page_content = '';		if(isset($_GET['edit']) && !empty($_GET['edit']) && 'true' === $_GET['edit']){		$theme_db = include __THEMEDB__;		$page_content .= generate_settings_form(__ADDRESS__, __THEME__, $theme_db);		if(isset($_POST['submit'])){			include 'validation.php';		}	}	else{		$page_content .= generate_settings_panel(__ADDRESS__,get_theme(__THEME__));	}