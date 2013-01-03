<?php
	
	
	$constants = file(CONSTANTS_ADDRESS);
	$constants[3] = "\tdefine('__ADDRESS__', '$s_address');\n";
	$constants[38] = "\tdefine('__THEME__','$s_theme');\n";

	$final_value = '';
	foreach($constants as $line => $value){
		$final_value .= $value;
	}

	if(!is_writeable(CONSTANTS_ADDRESS)){
		chmod(CONSTANTS_ADDRESS, 0777);
		file_put_contents(CONSTANTS_ADDRESS, $final_value);
	}
	else {
		file_put_contents(CONSTANTS_ADDRESS, $final_value);
	}
