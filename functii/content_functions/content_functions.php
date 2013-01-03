<?php

	function display_content($content, $id){
		$retval = '<p class="title">'.$content[$id]['title'].'</p><p class="date">'.$content[$id]['date'].'</p><p class="content">'.$content[$id]['content'].'</p>';
		return $retval;
	}