<?php

	function iterate_regions($cities){
		$retval = '';
		foreach($cities as $index => $Value){
			$retval .= '<a href="?show=localitati&jud='.$index.'" class='.$index.'"><p class='.$index.'>'.$index.'<p></a>';
		}
		return $retval;
	}
	
	function iterate_cities($cities, $judet){
		$retval = '';
		foreach($cities[$judet] as $city ){
			$retval .= '<a href="?show=localitati&jud='.$judet.'&l='.$city.'&page=1" class='.$city.'><p class='.$city.'>'.$city.'</p></a>';
		}
		return $retval;
	}
	
	function city_exists($cities, $judet, $local_city){
		foreach($cities[$judet] as $city){
			if($city === $local_city){
				return TRUE;
			}
		}
		return FALSE;
	}