<?php
	include $content_variabiles['content'];
?>
<html>
	<head> 
		<title><?php echo $content_variabiles['title']; ?></title>
			<?php echo get_style($content_variabiles['style'], __THEME__);?>
	</head>
	<body>
		<div id="menu">
			<?php
			    include 'pages'.DIRECTORY_SEPARATOR.'search_engine'.DIRECTORY_SEPARATOR.'search_engine.php';
				echo build_menu($main_pages);
			?>
		</div>
		<div id="content">
			<?php  echo $page_content; ?>
		</div>
	</body>
<html>
