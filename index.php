<?php
	require_once 'functii'.DIRECTORY_SEPARATOR.'functii.php';
	
	session_start();
	
	if(isset($_COOKIE[md5('rm')]) && !isset($_SESSION['rm'])){
		include 'pages'.DIRECTORY_SEPARATOR.'autologin'.DIRECTORY_SEPARATOR.'autologin.php';
	}
	
	$main_pages = include 'pages.php';
	
	if(isset($_GET['show'])  && array_key_exists($_GET['show'], $main_pages ) && $main_pages[$_GET['show']]['permision'] === TRUE){
		$page = $_GET['show'];
	} else {
		$page = 'home';
	}
	$content_variabiles = render($page, $main_pages);
	include 'template.php';
	//test