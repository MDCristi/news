<?php

	function get_style($style, $locatia_temei){
		$retval = '<LINK href="'.$locatia_temei.'" rel="stylesheet" type="text/css">';
		
		if(is_array($style)){
			foreach($style as $value){
			
				$retval .= 	'<LINK href="'.$value.'" rel="stylesheet" type="text/css">'.PHP_EOL;	
			}
		}
		
		return $retval;
	}
	
	/**
	 * 	Pentru a mentine codul cat mai usor lizibil o pagina poate include mai multe stylesheet-uri,
	 * pentru aceasta la indexul [style] va trebuii sa contina un array cu locatiile unde se afla stylurile respective.
	 * Astfel functia noastra mentine codul principal cat mai compact.
	 */
	 
	 /**
	  * structura valorii indexului [style] in cazul in carea valoare alui este un array
	  */
 
     /**
	  * style => array(
	  *				Path 1,
	  *				Path 2,
	  *				Path n
	  *			)	
	  */






 	  
	 