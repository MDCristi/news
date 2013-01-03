<?php

	/**
     * *********************************************************************************************** 	
	 * * !!!! deocamdata nu foloesc nicio functie de aici, acestea u fost doar pentru teste !!!!!!!  *
	 * ***********************************************************************************************
	 * Intregul fisier este concepu sa functioneze ca un tot unitar, toate aceste functii fiind folosite doar la paginare.
	 * In cazul functieie care afiseaza articole aceasta va crea linkuri(generate_priview) ce vor contine classe css
	 * pentru editarea butoanelor. Structura unei clase va fi: titlul.articolului_preview.
	 *
	 * In cazul functiei care creeaza butane catre pagini structura claselor va fi: class_page - pentru paginile normale, iar pagina curenta va fi 
	 * curent_page.
	 * 
	 * Mai trebuie lucrat la linkuri, o sa stabilesc mai tarziu daca voi edita aspectul in css 100% sau voi adauga si o imagine fiecarui link
	 */
	
	function paginare($city_news, $curent_page, $oras){
		$curent_page = ($curent_page - 1) * 4;
		$iterator = 0;
		$retval = '';
		foreach($city_news as $meta => $description){
			$iterator++;
			if($iterator > $curent_page && $iterator <= $curent_page + 4){
				$retval .= generate_preview($meta, $description['title'], $description['date'], $description['content'], $oras);
			}
		}
		
		return $retval;
	}
	
	function generate_preview($id, $title, $date, $content, $oras){
		$content = substr($content, 0, 60).'...';
		$retval = '<a href="?show=localitati&description='.$id.'&l='.$oras.'" class="page_preview">'.$title.'</a><br>'.$date.'<br>'.$content.'<br><br>';
		return $retval;
	}
	
	function validate_input($number_of_pages, $page){
		if($page > $number_of_pages || $page <= 0){
			$page = 1;
		}
		return $page;
	}
	
	function generate_page_buttons($number_of_pages, $curent_page){
		$retval = '<br>';
		$condition = 0;
		$curent_page = (int)$curent_page;		
		if($curent_page !== 1){
			$retval .= return_button(1, 'first page', $curent_page);
		}
		list($i, $stop_point) = get_start_point($curent_page);
		for( ; $i <= $number_of_pages; $i++){
			$condition++;
			$retval .= return_button($i, $i, $curent_page);
			if($condition === $stop_point){ break;}
		}
		if($curent_page !== $number_of_pages){
			$retval .= return_button($number_of_pages, 'last page', $curent_page);
		}
		return $retval;
	}
	
	function get_page_numbers($array){
		$i = 0;
		$pages = 0;
		foreach($array as $article){
			$i++;
			if($i === 1)
				$pages += 1;
			if($i === 10)
				$i = 0;
		}
		return $pages;
	}
	
	function get_start_point($curent_page){
		switch($curent_page){
			case 1:
				 $retval = array($curent_page, $stop_point = 4);
			break;
			case 2:
				$retval =  array($curent_page -1, $stop_point = 5);
			break;
			case 3:
				$retval =  array($curent_page -2, $stop_point = 6);
			break;
			case $curent_page > 3 :
				$retval = array($curent_page - 3, $stop_point = 7);
		}
		return $retval;
	}
	
	function return_button($page, $description, $curent_page){
		$retval = '<a href="http://'.__ADDRESS__.'/?show=localitati&jud=Alba&l=tecuci&page='.$page.'" ';
		($page === $curent_page) ? $retval .= 'class="curent_page">'.$description.'</a> ' 
		: $retval .= 'class="page_button">'.$description.'</a> ';
		return $retval;
	}
	
	/**
	  * de modificat functia return_button
	  * astfel incat sa returneze continut
	  * in functie de judetul si orasul
	  * pe care-l acceseaza clientul
	  **/
	  
	/**
      * de modificat si localitati.php astfel incat
	  * fiecare pagina sa-si primeasca atributele prin url
	  **/	
	  
	  
	  
	  
	
	