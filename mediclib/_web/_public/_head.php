 <?php
$title = '404. Page Not Found.';
$metad = '';
$metai = _WEB_.'img/logo.gif';
$metau = WEB;
$metat = 'website';
$appname = 'Mediclib';
$content = _PUBLIC_.$page1.'.php';

switch($page1):

	case 'about':
		$title = 'A propos &ndash; '.$appname;
		$content = _PUBLIC_.'about.php';
	break;

	case 'for-doctors':
		$title = 'A propos &ndash; '.$appname;
		$content = _PUBLIC_.'/design/registration_page.php';
	break;
	
	
	case 'how-it-works':
		$title = 'Comment ça marche? &ndash; '.$appname;
		$content = _PUBLIC_.'how-it-works.php';
	break;
	
	case 'index':
		$title = $appname.' : Prenez rendez-vous en ligne chez un médecin ou un dentiste';
		$metad = 'Trouvez rapidement un spécialiste près de chez vous et prenez rendez-vous gratuitement en ligne en quelques clics';
		$content = _PUBLIC_.'home.php';
	break;

	case 'search':
		
		Engine::redirect(WEB.'search/_search_result');
	break;
	
	case 'user':
		include(_PUBLIC_.'user'.DS.'_user.php');
	break;

	case 'doctor':
		include(_PUBLIC_.'doctor'.DS.'_doctor.php');
	break;

	case 'login':
		include(_PUBLIC_.'login'.DS.'login.php');
	break;


	case 'appointment':
		include(_PUBLIC_.'appointment'.DS.'_make_appointment.php');
	break;
	
	case 'doctors':
		$title = 'Praticiens à Paris 75000 : Rendez-vous par Internet sous 24h - '.$appname;
		$metad = 'Trouvez rapidement un praticien à Paris et prenez rendez-vous gratuitement en ligne en quelques clics';
		$doctors = Doctors::doc(array(
			'status'=>1,
			//'query'=>'bright'
		));
		$content = _PUBLIC_.'doctors.php';
	break;
	
endswitch;