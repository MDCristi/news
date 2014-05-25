<?php
	include $content_variabiles['content'];
?>
<!DOCTYPE html>
<html lang="en">
	<head> 
		<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <title>Bootstrap 101 Template</title>

	    <!-- Bootstrap -->
	    <link href="style/css/bootstrap.min.css" rel="stylesheet">
	    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    	<!-- Include all compiled plugins (below), or include individual files as needed -->
    	<script src="js/bootstrap.min.js"></script>
		
		<title><?php echo $content_variabiles['title']; ?></title>
			<?php echo get_style($content_variabiles['style'], __THEME__);?>
	</head>
	<body>
		<div id="menu" >
			<?php
			    include 'pages'.DIRECTORY_SEPARATOR . 'search_engine'. 
			    	DIRECTORY_SEPARATOR . 'search_engine.php';
				echo build_menu($main_pages);
			?>
		</div>
		<div id="content">
			<?php  echo $page_content; ?>
		</div>
	</body>
<html>
