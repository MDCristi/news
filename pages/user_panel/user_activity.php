<?php
	
	$i = 0;
	foreach($users_db[$id]['articles'] as $id => $article_title){
		$page_content .= '<a href="http://'.__ADDRESS__.'?show=home&id='.$id.'">'.$article_title.'</a>';
		if(4 === $i){
			break;
		}
	}