<?php

	/* closing the session and removing the remember me cookie */
	//! de updatat aceasta pagina la versiunea actuala!
	// in noua infrastructura nu mai folosesc cookieuri separate pentru a retine userul autentificat
	// voi seta limita de viata a sesiunii la 7 zile si voi crea o variabila separata pentru a mentine 
	// daca userul vrea sa-l loghez automat, daca nu vrea de fiecare data cand se logheaza sterg continutul 
	// din data trecuta <-- metoda pusa inca sub semnul intrebarii, ma decid daca fac asa sau folosesc unu
	// din cele 2 alternative.
	
	// de extins sitemul de logout!
	$page_content = '';
	setcookie(md5('rm'), $_SESSION['logat']['id'], time() - (3600 * 24 * 7));
	session_unset();
	session_destroy();
	header('location:http://'.__ADDRESS__.'?show=home');

	// de lucrat aici!!