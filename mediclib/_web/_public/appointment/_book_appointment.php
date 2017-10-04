<?php

/**
* Controller to redirect appointment page
*
**/
switch($page2):

	case 'book_appointment':
		$title = 'book appointment &ndash; '.$appname;
		//model
		include(_CONTROL_.'appointment.inc'); 
		// content
		$content = _PUBLIC_.'appointment'.DS.'book-appointment.php';
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