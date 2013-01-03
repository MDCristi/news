<?php
	
	$users_db = include __USERSDB__;
	$user_data = array(
					'username' => $username,
					'password' => $password,
					'region' => $region,
					'avatar' => 'database'.DIRECTORY_SEPARATOR.'users_db'.DIRECTORY_SEPARATOR.'users_photos'.DIRECTORY_SEPARATOR.'user_m.png',
					'age' => 'unknown',
					'sex' => 'unknown',
					'city' => 'unknown',
					'email' => 'unknown',
					'is_admin' => FALSE,
					'articles' => array()
				);
	$users_db[] = $user_data;
	if(!(is_writeable(__USERSDB__))){
		chmod(__USERSDB__, 0777);
		file_put_contents(__USERSDB__, '<?php return '.var_export($users_db, TRUE).';');
	} else {
		file_put_contents(__USERSDB__, '<?php return '.var_export($users_db, TRUE).';');
	}
	
	