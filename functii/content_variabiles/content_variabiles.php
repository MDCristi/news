<?php
	
	
	function render($curent_page, $pages_dictionary){
		$retval = array();
		foreach($pages_dictionary[$curent_page] as $index => $value){
			if( 'title' === $index || 'content' === $index || 'style' === $index){
				$retval[$index] = $value;
			}
		}
		return $retval;
	}