<?php

	function display_user_data($username, $password, $city, $region, $sex, $email, $avatar, $age){
		return ' <div id="user_data">
					<table class="user_data">
						<tr><td><img src="'.$avatar.'" width="60px" height="60px" border="4"></td></tr>
						<tr><td><p class="user_data">Username:  '.$username.'</p></td></tr>
						<tr><td><p class="user_data">Region:  '.$region.'</p></td></tr>
						<tr><td><p class="user_data">City:  '.$city.'</p></td></tr>
						<tr><td><p class="user_data">Age:  '.$age.'</p></td></tr>
						<tr><td><p class="user_data">Sex:  '.$sex.'</p></td></tr>
						<tr><td><p class="user_data">Email:  '.$email.'</p></td></tr>
					</table><br/>
					<p class="user_data"> <b>user activity</b></p>
					<hr>
				 </div>
				';	
	}
	
	function display_right_panel(){
		return '<div id="right_panel">
					<table class="right_panel">
						<tr><td> <a href="http://'.__ADDRESS__.'?show=user_panel&show_messages=true"> messages</a></td></tr>
						<tr><td><hr></td></tr>
						<tr><td> <a href="http://'.__ADDRESS__.'?show=user_panel&show_friends=true"> friends </a></td></tr>
						<tr><td><hr></td></tr>
						<tr><td> to be continued... </td></tr>
					</table>
				</div>
				';
	}
	function display_admin_panel(){
		return '<div id="admin_panel">
					<table>
					<tr><td> <hr> </td></tr>	
					<tr><td> <a href="http://'.__ADDRESS__.'?show=database_management"> database management </a></td></tr>
					<tr><td> <hr> </td></tr>
					<tr><td> <a href="?show=site_settings"> site settings </a></td></tr>
					</table>
				</div>
				';
	
	}
	
		
	function display_user_activity($id, $database){
		$i = 0;
		$retval = '<div id="user_activity"><table class="user_activity">';
		foreach($database[$id]['articles'] as $id => $article_title){
			$retval .= '<tr><td><a href="http://'.__ADDRESS__.'?show=home&id='.$id.'">'.$article_title.'</a></td></tr>';
			if(4 === $i){
				return $retval .= '</table></div>';
			}
		}
		return $retval .= '</table></div>';
	}