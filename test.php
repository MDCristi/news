<?php
	
	$pattern = '#[a-z]+#';
	$string = 'test';
	if(preg_match($pattern, $string)){
		echo '<b>hello world</b>';
	}