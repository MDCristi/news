<?php

	//opens the databses
	$main_db = include __MAINDB__;
	$top_w = include __TOPW__;
	$top_n = include __TOPN__;
	$comments_db = include __COMMENTSDB__;
	$regions = include __REGIONS__;
	$users_db = include __USERSDB__;
	
	//creating the main var
	$position = count($main_db);
	
		
	//inserting data to db
	$article_data = array(
					'title' => $name,
					'region' => $region,
					'city' => $city,
					'content' => nl2br($content),
					'date' => date('d M Y H:i'),
					'author' => $_SESSION['logat']['username'],
					'author_id' => $_SESSION['logat']['id'],
					'coments' => $position,
					'photos' => $position		
					);
					
	$users_db[$_SESSION['logat']['id']]['articles'][$position] =  $name;
	krsort($users_db[$_SESSION['logat']['id']]['articles']);
	$top_w[$position] = 1;
	$top_n[$position] = date('d M Y H:i');
	$main_db[] = $article_data;
	$comments_db[$position] = array(); 
	arsort($top_w);
	krsort($top_n);
		
	if(!in_array($city, $regions[$region])){
		$add_new_city = TRUE;
		$regions[$region][] = $city;
		if(!is_writeable(__REGIONS__)){
			chmod(__REGIONS__, 0777);
			file_put_contents(__REGIONS__, '<?php return '. var_export($regions, TRUE).';');		
		}
		else {
			file_put_contents(__REGIONS__, '<?php return '. var_export($regions, TRUE).';');
		}
		
	}
	
	if(!is_writeable(__USERSDB__)){
		chmod(__USERSDB__, 0777);
		file_put_contents(__USERSDB__, '<?php return '.var_export($users_db, TRUE).';');		
	}
	else {
		file_put_contents(__USERSDB__, '<?php return '.var_export($users_db, TRUE).';');
	}
	
	if(!is_writeable(__TOPW__)){
		chmod(__TOPW__, 0777);
		file_put_contents(__TOPW__, '<?php return '.var_export($top_w, TRUE).';');		
	}
	else {
		file_put_contents(__TOPW__, '<?php return '.var_export($top_w, TRUE).';');
	}
	
	
	if(!is_writeable(__TOPN__)){
		chmod(__TOPN__, 0777);
		file_put_contents(__TOPN__, '<?php return '.var_export($top_n, TRUE).';');		
	}
	else {
		file_put_contents(__TOPN__, '<?php return '.var_export($top_n, TRUE).';');
	}
	
	
	if(!is_writeable(__MAINDB__)){
		chmod(__MAINDB__, 0777);
		file_put_contents(__MAINDB__, '<?php return '.var_export($main_db, TRUE).';');		
	}
	else {
		file_put_contents(__MAINDB__, '<?php return '.var_export($main_db, TRUE).';');
	}
	
	if(!is_writeable(__COMMENTSDB__)){
		chmod(__COMMENTSDB__, 0777);
		file_put_contents(__COMMENTSDB__, '<?php return '.var_export($comments_db, TRUE).';');		
	}
	else {
		file_put_contents(__COMMENTSDB__, '<?php return '.var_export($comments_db, TRUE).';');
	}
	
	
	
	
	
	
	
	
	
	
	
	
	
	
	