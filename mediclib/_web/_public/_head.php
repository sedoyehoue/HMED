 <?php
$some  = '404';
$cat = '';
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
		$title = $appname;
		$content = _PUBLIC_.'home.php';
	break;
	
	case 'user':
		include(_PUBLIC_.'user'.DS.'_user.php');
	break;
	
endswitch;