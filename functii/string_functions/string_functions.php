<?php

	function check_if_is_valid_mail_address($email){
		$numar_de_caractere_email = strlen($email);
		$retval = 0;
		$coordonate = 0;
		for($i = 0; $i < $numar_de_caractere_email; $i++){
			if($email[$i] === '@'){
				$first_part_of_email = check_if_is_valid_charachter(substr($email, 0, $coordonate));
				$second_part_of_email = check_if_is_valid_charachter(substr($email, $coordonate+ 1, $numar_de_caractere_email - $coordonate + 1));
			} else {
				$coordonate++;
			}
		}
	
		if($first_part_of_email && $second_part_of_email){
			return TRUE;
		} else {
			return FALSE;
		}
	}
	// functii in faza de test, nu le folosesc deocamdata
	
	function get_theme($theme){
		$theme = explode(DIRECTORY_SEPARATOR, $theme);
		switch($theme[count($theme) - 1]){
			case 'style.css' :
				return 'tema 1';
			break;
			case 'style2.css' :
				return 'tema 2';
			break;
				case'style3.css' :
				return 'tema 3';
			break;
			case 'style4.css' :
				return 'tema 2';
			break;
		
		}
	}
	/*
	function get_rest($theme){
		if('standard' === $theme){
			return 'theme2';
		} 
		else{
			return 'standard';
		}
	}
	*/	