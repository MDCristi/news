<?php

	//de implementata parte cu iterat doar dintr-o anumita regiune!!
	
	if(isset($_GET['page'])){
		$page = (int)$_GET['page'];
	}
	else {
		$page = 1;
	}
	$top_n_db = include __TOPN__;
	$main_db = include __MAINDB__;
	
	// impartirea articolului pe pagini
	$start_point = ($page -1 ) * 10;
	$stop_point = $page * 10;
	$i = 0;
		
	if(isset($_POST['top_n'])){
		if($_POST['article_region'] !== 'toate'){
			$page_content .= '<meta HTTP-EQUIV="REFRESH" content="0; url=?show=home&region='.$_POST['article_region'].'">';
		}
		else {
			$page_content .= '<meta HTTP-EQUIV="REFRESH" content="0; url=?show=home">';
		}
	}
	
	if(isset($_GET['region']) && !empty($_GET['region'])){
		include 'iterate_from_custom_region.php';
	}
	else {	
		foreach($top_n_db as $index => $value){
			$i++;
			if($i >= $start_point){
				$articles .= generate_article_priview($main_db[$index]['title'], $main_db[$index]['content'], $main_db[$index]['photos']);	
			}
			if($i === $stop_point){
				break;
			}
		}
		$articles .= '</table>';
	}

	