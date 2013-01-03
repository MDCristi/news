<?php
	
	/**
	 * Aici introduc datale in db, as fi putut rezolva toasta treba asta cu un foreach
	 * dar ar fi trebuit sa schimb design-ul db si asta ar fi avut urmari in mai multe parti ale proiectului
	 * unde design-ul actual are un rol foarte important.
     */	 
	
	
	 $regions = include __REGIONS__;
	 $users_db[$id]['username'] = $username;
	 $users_db[$id]['password'] = $password;
	 $users_db[$id]['city'] = $city;
	 $users_db[$id]['region'] = $region;
	 $users_db[$id]['sex'] = $sex;
	 $users_db[$id]['email'] = $email;
	 $users_db[$id]['age'] = $age;
	 
	 /**
	  * Daca userul si-a schimbat si sexul este firesc sa-i schimb si imaginea de avatar daca el nu are unsa standar.
	  * Aceasta parte a a codului va suferi modificari pentru ca nu mai are sens sa-i schimb imaginea de avatar atat timp cat el
	  * are un avatar propriu.
      */	  
	 
	 if('female' === $sex){
		$users_db[$id]['avatar'] = __AVATARFEMALE__;	
	 } 
	 else if('male' === $sex){
		$users_db[$id]['avatar'] = __AVATARMALE__;
	 }
	 
	 /**
	  * Aici verific daca in baza de date exista orasul introdus de utilizator
	  * deoarece sunt prea multe orase, comune, sate in tara asta incat s ale stiu eu pe toate,
	  * desigur ca am sa adaug un filtru astfel incat userul sa nu poata introduce numea prea porcoase
	  * zic prea porcoase deoarece cateva localitati din Romania mai au nume de atsea(Baicoi).
	  * Daca s-a gasit intradevar un oras nou il introduc in baza de date.
      */
	 
	 if(!in_array($city, $regions[$region])){
			$add_new_city = TRUE;
			$regions[$region][] = $city;
			file_put_contents(__REGIONS__, '<?php return '. var_export($regions, TRUE).';');
	}
	
	file_put_contents(__USERSDB__, '<?php return '.var_export($users_db, TRUE).';');
	$page_content .= '<b>date modificate cu succses<b>';
	$page_content .= $page_content .= '<meta http-equiv="refresh" content="1; url=http://'.__ADDRESS__.'?show=user_panel">';
		