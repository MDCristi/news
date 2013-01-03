<?php
	
	/**
	 *  Aceasta parte a codului are rolul de a initializa array-ul $_SESSION['logat']
     * cu toate datele userului necesare pe parcursul navigarii.
	 *  Pentru asta voi folosi functia get_users_data() care va returna un array cu aceste date
	 *  
	 * -> array get_users_data($username, $database) // de modificat documentatia, intre timp am schimbat metoda de a lua datele
	 */
	 
	 /**
	  * Structura array-ului $_SESSION['logat']=>
	  *
	  * $_SESSION['logat'] = array(
	  *							username => username
	  *							region => region // judetul din care provine userul
	  *							city => city // orasul, localitatea din care provine userul
      *							avatar => path // locul unde este stocat avatarul, daca acesta nu are un avatar se va folosi cel default	  
	  *							sex => sex // vor fi situatii cat voi avea nevoie de sexul userului
	  *							is_admin => FALSE // daca este admin aceasta rubrica va avea valoarea TRUE, dara adminii se vor adauga manual in db	
	  *
      */	  
	  
	  /**
	   *		Mecanismul de fucntionare al verificarii existentei username-ului si parolei
	   *	 Functia de verificare a existentei si a corespondentei username-parola returneaza indexul array-ului din DB unde
	   * sunt stocate datele userului daca username-ul exista si se potriveste cu parola introdusa de user altfel returneaza false.
	   * 	Am facut acest lucru pentru a nu mai fi nevoit sa iterez inca o data toate informatiile din db pentru extragerea datelor 
	   * necesarea pentru initializarea $_SESSION['logat'], inca mai lucrez la sistem.
	   *
	   */
	$_SESSION['logat'] = array(
							'username' => $main_db[$username]['username'],
							'region' => $main_db[$username]['region'],
							'city' => $main_db[$username]['city'],
							'avatar' => $main_db[$username]['avatar'],
							'sex' => $main_db[$username]['sex'],
							'is_admin' => $main_db[$username]['is_admin'],
							'id' =>$username							
						);				
	/**
	 * Sistemul de remember me va consta in trimiterea unuio cookie cu id-ul di baza de date
	 * a array-ului unde sunt stocate informatiile despre utilizator ca valoare si ca nume va avea
	 *  md5('rm'). Cooki-ul este valabil doar 7 zile, probabil am sa adaug in user panel userului 
	 * optiunea sa-si aleaga valabilitatea cookie-ului
	 * -> de modificat documentatia invechita de pe aici
	 */	 
	
	if(3 === $decision){
		$_SESSION['rm'] = TRUE; // de documentata partea asta, pe scurt variabila asta e pentru a nu recrea $_SESSION['logat'] la fiecare incaracarea site-ului..
		setcookie(md5('rm'), $username, time() + 3600 * 24 * 7);
	}
	$page_content .= '<center><b>te-ai logat cu succes! </b></center>';
	$page_content .= '<meta http-equiv="refresh" content="4; url=http://'.__ADDRESS__.'">';
	