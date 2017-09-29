<?php

/**
* Controller to redirect appointment page
*
**/
switch($page2):

	case 'make_appointment':
		$title = 'Make appointment &ndash; '.$appname;
		$content = _PUBLIC_.'appointment'.DS.'make_appointment.php';
	break;
	
	
endswitch;


/**
*~* All actions related to 'appointment' is been switched here.
*~* To perform an action, add name="submit" then give it a unique value.
*~* That value will be used as the case bellow
*~~*/
switch($submit):

	case 'save_make_apt':
		
	break;
	
endswitch;