<?php
	
	/**
	 * 	Scopul acestui fisier este acela de a display-a content dintr-un articol,
	 * vor fi mai multe functii pentru a duce la bun sfarsit acest lucru.
	 * 	Daca cel ce viziteaza siteul in acel moment poate adauga articole doar daca este user sau admin
	 * ceea ce presupune ca variabila $user_permision sa fie a-addmin sau u-user, de asemenea da a permisiunea este a
	 * insemna ca userul este admin si ii este oferita posibilitatea de a sterge articole sau de a modifica si sterge comentarii
	 * in principiu adminul va putea sa manipuleze cum vrea continutul paginii	
	 */
	 
	 function display_article($article){
		$retval = '<table class="article_description">';
		$retval .= '<tr><td><h1>'.$article['title'].'</h1></td></tr>';
		$retval .= '<tr><td>'.$article['content'].'</td></tr>';
		$retval .= '<tr><td>'.generate_article_photos($article['photos'], 120, 120).'</td></tr>'; 
		$retval .= '<tr><td><hr></td></tr></table>';
		$retval .= '<table class="article_head"><tr><td><a href="?show=user_profile&id='.$article['author_id'].'">'.$article['author'].'</a></td><td>'.$article['date'].'</td></tr></table>';
		return $retval;
	 }
	 
	 function display_article_comments($comments, $permision, $curent_page){
		$retval = '';
		$delete_article = '';
		if(!empty($comments)){	
			foreach($comments as $nr => $metadata){
				if('a' === $permision){
					$delete_article = '<a href="http://'.__ADDRESS__.'?show=home&id='.$curent_page.'&remove='.$nr.'"> sterge</a>';
				}
				$retval .='<div id="comment_head">
							<table class="comment_head">
								<tr>
									<td><img src="'.$metadata['avatar'].'" width="45px" height="45px"></td>
									<td><a href="?show=user_profile&id='.$metadata['id'].'">'.$metadata['author'].'</a></td>
									<td><font color="#C0C0C0"><p>'.$metadata['date'].'</p></font></td>
									<td>'.$delete_article.'</td>
								</tr>
							</table>
							</div>
							<div id="comment_body">
								<table class="comment_body">
									<tr>
										<td>'.$metadata['content'].'</td>
									</tr>
								</table>
							</div>';
			}
		}
		else {
			return $retval = 'nu fost adaugat inca nici un comentariu...'; 
		}
		return $retval;
	 }
	 