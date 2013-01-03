<?php

	foreach($top_n_db as $index => $value){
		if($i >= $start_point && $_GET['region'] === $main_db[$index]['region']){
			$i++;
			$articles .= generate_article_priview($main_db[$index]['title'], $main_db[$index]['content'], $main_db[$index]['photos']);	
		}
		if($i === $stop_point){
			break;
		}
	}
	$articles .= '</table>';