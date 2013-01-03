<?php

	$path = 'database'.DIRECTORY_SEPARATOR.'content'.DIRECTORY_SEPARATOR.'photos'.DIRECTORY_SEPARATOR.$position;
	if(!(file_exists($path) && is_dir($path))){
		mkdir($path, 0777);
	}
	
	if(!(move_uploaded_file($_FILES['article_photos']['tmp_name'], $path.DIRECTORY_SEPARATOR.$_FILES['article_photos']['name']))){
			$mesaj .= 'eroare la uploadarea fisierului <br/>';
	}
	