<?php
	
	
	//functii pentru form-ul de postare articole
	function generate_article_form(){
		return $retval = '<form method="post" enctype="multipart/form-data">
							<label for="article_name" class="article_name_label"> Titlul articolului </label>
							<input class="form-control" type="text" name="article_name" class="article_name" id="article_name"/><br/>
							<label for="article_region" class="article_region_label"> Regiunea </label>	
							'.
							 generate_dropdown_with_regions()
							.'
							<br/>
							<label  for="article_city" class="article_city_label"> Localitatea </label>
							<input class="form-control"tyle="text" name="article_city" class="article_city" id="article_city"><br/>
							<label for="article_content" class="article_content_label"> Continutul articolului </label><br/>
							<textarea name="article_content" class="article_content" id="article_content" rows="28" cols="140"></textarea><br/>
							<label for="article_photos" class="article_photos_label"> A dauga o fotografie </label>
							<input type="file" name="article_photos" class="article_photos" id="article_photos"/><br/>
							<input class="btn btn-default" type="submit" name="submit" value="posteaza" size="20"/>
						  </form> 	';
	}
	
	function generate_dropdown_with_regions($option = ''){
		
		$regions = include __REGIONS__;
		$retval = '<select name="article_region" class="form-control" id="article_region">';
		
		if(!empty($option)){
			$retval .= '<option value="'.$option.'">'.$option.'</option>';
		}	
		
		foreach($regions as $region => $value){
			$retval .= '<option value='.$region.'>'.$region.'</option>';
		}
		
		return $retval .= '</select>';
	}
	
	
	//functii pentru formul de inregistarre
	
	function generate_registration_form(){
		return $retval = '<form method="post">
							<label for="username" class="username_label"> Username </label>	
							<input size="30" type="text" name="username" class="form-control" id="username"/><br/>
							<label for="password" class="password_label"> Password </label>
							<input type="password" name="password"  class="form-control" id="password"/><br/>
							<label for="article_region" class="article_region_label"> Judet </label>	
							'.
							generate_dropdown_with_regions()
							.'
							<br/>
							<input type="submit" name="submit" class="btn btn-default">
						  </form>	
						';
	
	}
	
	//functii pentru formul de logare
	
	function generate_login_form(){
	
		return $retval ='<form method="post">
							<label for="username" class="username_label"> Username</label>
							<input type="text" name="username" class="username" id="username"/><br>
							<label for="password" class="password_label"> Password </label>
							<input type="password" name="password" class="password" id="username"><br/>
							<label for="remember_me" class="remember_me_label"> Pastreaza-ma logat </label>
							<input type="checkbox" name="remember_me" class="remember_me" id="remember_me"><br/>
							<input type="submit" name="submit" class="submit">
						</form>
						';
	}	
	
	// functii pentru formul de pe pagina de intrare
	
	function generate_users_options_form(){
		return $retval = '<form method="post">
							<input type="submit" name="top_n" class="top_n" value="cele mai noi"/>
							<label for="article_region" class="article_region_label"> Alege Judetul </label>'.
							generate_dropdown_with_regions('toate')	
							.'
						  </form>		
						 ';
	
	}
	
	// functii pentru generarea unui comment form
	
	function generate_comment_form(){
		return $retval = '<form method="post">
							<textarea name="comment" class="form-control" class="article_coment"  rows="4" cols="35" wrap="virtual">ai la dispozitie 700 de caracatere... </textarea><br/>
							<input type="submit"  name="submit_comment" value="posteaza comentariul"/>
						  </form>';
	}
	
	// change user data forms
	function change_user_data_form($username, $password, $city, $region, $sex, $email, $avatar, $age){
		 return ' <div id="user_data">
					<table class="user_data">
					<form method="post">
						<tr><td><img src="'.$avatar.'" width="60px" height="60px" border="4"></td></tr>
						<tr><td><p class="user_data">Username:  '.$username.'</p></td></tr>
						<tr><td><p class="user_data">Password:  <input type="text" name="password" class="password" value="'.$password.'"/></p></td></tr>
						<tr><td><p class="user_data">Region: '.generate_dropdown_with_regions().' </p></td></tr>
						<tr><td><p class="user_data">City:   <input type="text" name="city" class="region" value="'.$city.'"/></p></td></tr>
						<tr><td><p class="user_data">Age:   <input class="form-control" type="text" name="age" class="age" value="'.$age.'"/></p></td></tr>
						<tr><td><p class="user_data">Sex:   '.generate_dropdown_with_sex().'</p></td></tr>
						<tr><td><p class="user_data">Email:   <input class="form-control" type="text" name="email" class="email" value="'.$email.'"/></p></td></tr>
						<tr><td><p class="user_data"><input class="form-control" type="submit" name="submit" value="actualizeaza informatii"></td></tr>
					</form>
					</table><br/>
					<p class="user_data"> <b>user activiti</b></p>
					<hr>
					<table class="user_activity">
					
					</table>
				 </div>
				';		
	
	}
	
	function generate_dropdown_with_sex(){
		return '<select name="sex" class="sex">
					<option value="male">male</option>
					<option value="female">female</option>
				</select>
		
				';
	}
	
	// functii pentru motorul de cautare
		
	function generate_search_form(){
		return '<form method="post" class="search_engine">
					<table>
						<tr>
							<input class="form-control" type="text" name="search_engine_input" placeholder="Cauta..."/>
							<input class="btn btn-default" type="submit" name="search_engine_submit" value="cauta"/>
						</tr>
					</table>
				</form>
				';
	}
	// settings panel functions
	
	
	
	
	
	
	
	
	
	