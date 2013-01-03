<?php

	unset($comments[$_GET['id']][$_GET['remove']]);
	file_put_contents(__COMMENTSDB__, '<?php return '.var_export($comments, TRUE).';');
	$page_content .= '<meta http-equiv="refresh" content="0; url=http://'.__ADDRESS__.'?show=home&id='.$_GET['id'].'">';