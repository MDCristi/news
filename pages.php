<?php
	return array(
			'home' => array(
						'title' => 'home',
						'show_in_menu' => TRUE,
						'content' => 'pages'.DIRECTORY_SEPARATOR.'home'.DIRECTORY_SEPARATOR.'home.php',
						'style' => array(
									'style'.DIRECTORY_SEPARATOR.'custom_style'.DIRECTORY_SEPARATOR.'home'.DIRECTORY_SEPARATOR.'style.css'
									),
						'permision' => TRUE
					),
			'inregistrare' => array(
						'title' => 'fa-ti cont',
						'show_in_menu' => isset($_SESSION['logat']) ? FALSE : TRUE,
						'content' => 'pages'.DIRECTORY_SEPARATOR.'inregistrare'.DIRECTORY_SEPARATOR.'inregistrare.php',
						'style' => 'standard',
						'permision' => TRUE
				),
			'logare' => array(
						'title' => 'logheaza-te',
						'show_in_menu' => isset($_SESSION['logat']) ? FALSE : TRUE,
						'content' => 'pages'.DIRECTORY_SEPARATOR.'logare'.DIRECTORY_SEPARATOR.'logare.php',
						'style' => 'standard',
						'permision' => isset($_SESSION['logat']) ? FALSE : TRUE
				),
			'logout' => array(
						'title' => 'logout',
						'show_in_menu' => isset($_SESSION['logat']) ? TRUE : FALSE,
						'content' => 'pages'.DIRECTORY_SEPARATOR.'logout'.DIRECTORY_SEPARATOR.'logout.php',
						'style' => 'standard',
						'permision' => isset($_SESSION['logat']) ? TRUE : FALSE
				),
			'user_panel' => array(// de lucrat aici
						'title' => 'user name',
						'show_in_menu' => isset($_SESSION['logat']) ? TRUE : FALSE,
						'menu_name' => isset($_SESSION['logat']) ? '<p class="user_panel_name">'.$_SESSION['logat']['username'].'<img src="'.$_SESSION['logat']['avatar'].'" width="37px" height="37px" class="user_panel"/>' : '',
						'content' => 'pages'.DIRECTORY_SEPARATOR.'user_panel'.DIRECTORY_SEPARATOR.'user_panel.php',
						'style' => array(
									'style'.DIRECTORY_SEPARATOR.'custom_style'.DIRECTORY_SEPARATOR.'user_panel'.DIRECTORY_SEPARATOR.'style.css'
										),
						'permision' => isset($_SESSION['logat']) ? TRUE : FALSE
				),
			'add_article' =>  array(
						'title' => 'scrie un articol',
						'show_in_menu' => isset($_SESSION['logat']) ? TRUE : FALSE,
						'menu_name' => 'scrie un articol',
						'content' => 'pages'.DIRECTORY_SEPARATOR.'add_article'.DIRECTORY_SEPARATOR.'add_article.php',
						'style' => array(
									   'style'.DIRECTORY_SEPARATOR.'custom_style'.DIRECTORY_SEPARATOR.'add_article'.DIRECTORY_SEPARATOR.'style.css'
									),
						'permision' => TRUE					
				),
			'user_profile' => array(
							'title' => 'profil',
							'show_in_menu' => FALSE,
							'content' => 'pages'.DIRECTORY_SEPARATOR.'user_profile'.DIRECTORY_SEPARATOR.'user_profile.php',
							'style' => 'standard',
							'permision' => TRUE
				),
			'search_engine' => array(
							'title' => 'cautare',
							'show_in_menu' => FALSE,
							'content' => 'pages'.DIRECTORY_SEPARATOR.'search_engine'.DIRECTORY_SEPARATOR.'search_engine.php',
							'style' => 'standard',
							'permision' => TRUE
				),
			'database_management' => array(
								'title'  => 'database management',
								'show_in_menu' => FALSE,
								'content' => 'pages'.DIRECTORY_SEPARATOR.'admin_panel'.DIRECTORY_SEPARATOR.'database_management'.DIRECTORY_SEPARATOR.'database_management.php',
								'style' => 'standard',
								'permision' => isset($_SESSION['logat']) ? $_SESSION['logat']['is_admin'] : FALSE
				),
			'site_settings' => array(
							'title' => 'settings',
							'show_in_menu' => FALSE,
							'content' => 'pages'.DIRECTORY_SEPARATOR.'admin_panel'.DIRECTORY_SEPARATOR.'site_settings'.DIRECTORY_SEPARATOR.'site_settings.php',
							'style' => 'standard',
							'permision' => isset($_SESSION['logat']) ? $_SESSION['logat']['is_admin'] : FALSE
				)
		);
			
	