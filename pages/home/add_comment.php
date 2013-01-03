<?php
	/**
	 * de lucrat la securitate
	 */
	 
	 if(isset($_POST['comment']) && !empty($_POST['comment'])){
		if(strlen($_POST['comment']) > 10){
			$comments[$_GET['id']][] = array(
										'date' => date(' H:i d-m-y'),
										'author' => $_SESSION['logat']['username'],
										'avatar' => $_SESSION['logat']['avatar'],
										'id' => $_SESSION['logat']['id'],
										'content' => nl2br($_POST['comment'])
										);
			krsort($comments[$_GET['id']]);
			file_put_contents(__COMMENTSDB__, '<?php return '.var_export($comments, TRUE).';');
			$page_content .= '<meta http-equiv="refresh" content="0; url=http://'.__ADDRESS__.'?show=home&id='.$_GET['id'].'">';
		} 
		else {
			$mesaj .= '<b>comentariile trebuie sa contina minim 10 caractere</b>';
		}
	}
	
	