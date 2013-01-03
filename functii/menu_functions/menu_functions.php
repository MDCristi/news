<?php
	
	function build_menu($pages_dictionary){
		$retval = '';
		foreach($pages_dictionary as $index => $value){
			if($value['show_in_menu'] === TRUE){
				if(isset($value['menu_name'])){
					$retval .= '<a href="?show='.$index.'" class="'.$index.'"><p class="'.$index.'">'.$value['menu_name'].'</p></a>  ';
				} else {
					$retval .= '<a href="?show='.$index.'" class="'.$index.'"><p class="'.$index.'">'.$index.'</p></a>  ';
				}
			}
		}
		return $retval;
	}
	