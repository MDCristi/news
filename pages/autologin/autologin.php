<?php
	$i = $_COOKIE[md5('rm')];
	$users_db = include __USERSDB__;
	$_SESSION['logat'] = array(
							'username' => $users_db[$i]['username'],
							'region' => $users_db[$i]['region'],
							'city' => $users_db[$i]['city'],
							'avatar' => $users_db[$i]['avatar'],
							'sex' => $users_db[$i]['sex'],
							'is_admin' => $users_db[$i]['is_admin'],
							'id' => $_COOKIE[md5('rm')]
						);				
	unset($users_db);
	unset($i);