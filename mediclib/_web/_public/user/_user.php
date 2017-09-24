<?php

switch($page2):

	case 'login':
		$title = 'Se connecter &ndash; '.$appname;
		$content = _PUBLIC_.'user'.DS.'login.php';
	break;
	
	case 'logout':
		Session::del('m_d_l_account');
		Cookie::del('m_d_l_account');
		Engine::alert('success', 'Vous êtes maintenant déconnecté');
		Engine::redirect(WEB.'user/login');
	break;
	
	case 'search':
		
		Engine::redirect(WEB.'user/doctors');
	break;
	
endswitch;


/**
*~* All actions related to 'user' is been switched here.
*~* To perform an action, add name="submit" then give it a unique value.
*~* That value will be used as the case bellow
*~~*/
switch($submit):

	case 'login':
		if(empty($alwaysEmpty) == true){
			if(empty($username) == false && empty($password) == false){
				try {
				$password = pCrypt::cryptPassword($username, $password);
			     }
			     catch (EXCEPTION $e) {
			     		echo '';

			     }

				//echo $password; die();
				$row = Sql::select('SELECT * FROM `'.DBPREF.'actors` WHERE ACT_USER_NAME = '.$sql->Param('1').'
				AND ACT_PASSWORD = '.$sql->Param('2').' LIMIT 1', array($username, $password), 'row');
				if(count($row) > 0){
					Session::set('m_d_l_account', $row['ACT_ID']);
					Cookie::set('m_d_l_account', isset($keeplogin)?$row['ACT_ID']:'');
					Engine::redirect(WEB);
				}else{
					$msg = 'Données incorrectes'; $status = 'error';
				}
			}else{
				$msg = 'Tous les champs sont réquis'; $status = 'warning';
			}
		}
	break;
	
endswitch;