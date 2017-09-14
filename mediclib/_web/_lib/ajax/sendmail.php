<?php
header("Content-Type: text/html; charset=UTF-8");

$name       = @trim(stripslashes($mailname)); 
$email      = @trim(stripslashes($mailemail)); 
$subject    = @trim(stripslashes($mailsubject)); 
$message    = @trim(stripslashes($mailmessage));

if(empty($alwaysEmpty)){
	if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
		if(filter_var($email, FILTER_VALIDATE_EMAIL)){
			$cmd = Engine::phpMail($sett['EMAIL'],$email,$name,$subject,$message);
			if($cmd == true){
				echo '<span class="success-msg"><i class="fa fa-check-circle"></i> Message Sent successfully!</span>';
			}else{
				echo '<span class="error-msg"><i class="fa fa-times-circle"></i> Error Sending email!</span>';
			}
		}else{
			echo '<span class="error-msg"><i class="fa fa-times-circle"></i> Plase enter a valid email address!</span>';
		}
	}else{
		echo '<span class="error-msg"><i class="fa fa-times-circle"></i> Field(s) must not be empty!</span>';
	}
}else{
	exit('honeyPot');
}
