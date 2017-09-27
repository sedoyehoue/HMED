<?php 
define('_WEB_', WEB.'_web/_assets/');

# controllers
include(_CONTROL_.'doctors.inc'); 

$p=2;
$page1 = Permalinks::segment($p+1);
$page2 = Permalinks::segment($p+2);
$page3 = Permalinks::segment($p+3);
$page4 = Permalinks::segment($p+4);
$page5 = Permalinks::segment($p+5);
$page1 = empty($page1)?'index':$page1;


if(isset($ajax_request) == false){	
	include(_PUBLIC_.'_head.php');
	include(_PUBLIC_.'_web.php');
}else{

	switch($ajax_request):
		
		case 'sendmail':
			include(_AJAX_.'sendmail.php');
		break;
		
		case 'cart':
			include(_AJAX_.'cart.php');
		break;
		
	endswitch;
	
}

$sql->close();