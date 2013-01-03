<?php

	function file_can_be_uploaded($file){
		if('image/png' !== $file['type']){
			return FALSE;
		}
		
		if( $file['size'] > 131072){
			return FALSE;
		}
		return TRUE;
	}
	
	/**
	 * Desi functia devine mai ambigua datorita folosirii
	 * variabilei decision pentru a st
	 */