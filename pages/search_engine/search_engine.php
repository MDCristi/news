<?php
	
	
	/**
	 * Deocamdana motorul de cautare este inca in faza de test
	 * uitate in functi/search_engine/search_engine_functions.php pentru a vedea mecanismul de functionare.
	 * Din pacate la ora ctuala nu afiseaza rezultatele in functie de cele ce contine cele mai
	 * apropiate cuvinte cu rezultatul cheie, pe viitor voi extinde sistemul, dar deocamdata functioneaz optim.
	 */
	 
	if(!isset($page_content)){
		$page_content = '';
	}
	if(isset($_POST['search_engine_submit']) && isset($_POST['search_engine_input']) && !empty($_POST['search_engine_input'])){
		$page_content .= '<meta HTTP-EQUIV="REFRESH" content="0; url=http://'.__ADDRESS__.'?show=search_engine&s='.$_POST['search_engine_input'].'">';
	}	
	
	if(isset($_GET['s']) && !empty($_GET['s'])){
		$main_db = include __MAINDB__;
		$page_content .= '<b>rezultatul cautarii dupa "'.$_GET['s'].'"</b><br/>';
		$page_content .= search_content($_GET['s'], $main_db);
	}
	$page_content .= generate_search_form();
	
	
	