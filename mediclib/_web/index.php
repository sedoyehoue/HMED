<?php 
define( '_WEB_'	,	WEB.'_web/_assets/' );

# CONTROLLER(S)
include(_CONTROL_.DS.'user.inc'); 

$page1 = Permalinks::segment('2');
$page2 = Permalinks::segment('3');
$page3 = Permalinks::segment('4');
$page4 = Permalinks::segment('5');
$page5 = Permalinks::segment('6');
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