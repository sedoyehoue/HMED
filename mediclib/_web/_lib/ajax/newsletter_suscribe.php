<?php
header('Content-Type: text/html; charset=UTF-8');

/*
*@param $nl_email => ajax incoming email address
*/

if(!empty($nl_email)){
	if(filter_var($nl_email, FILTER_VALIDATE_EMAIL)){
		$stmt = $sql->Execute($sql->Prepare('SELECT NL_EMAIL,NL_STATUS FROM '.DBPREF.'newsletter WHERE NL_EMAIL = '.$sql->Param('1').' LIMIT 1'),array($nl_email));
		if($stmt->RecordCount() == 1){
			$obj = $stmt->FetchNextObject();
			if($obj->NL_STATUS == 0){
				$stmt = $sql->Execute($sql->Prepare('UPDATE '.DBPREF.'newsletter SET NL_STATUS = '.$sql->Param('1').',NL_ADDR = '.$sql->Param('2').', NL_BROWSER = '.$sql->Param('3').' WHERE NL_EMAIL = '.$sql->Param('4') ),array('1',$_SERVER['REMOTE_ADDR'],$_SERVER['HTTP_USER_AGENT'],$nl_email));
				if($stmt == true){
					echo 're-success';
				}
			}else
			if($obj->NL_STATUS == 1){
				echo 'already';
			}
		}else{
			$stmt = $sql->Execute($sql->Prepare('INSERT INTO '.DBPREF.'newsletter (NL_EMAIL,NL_ADDR,NL_BROWSER,NL_CRDATE) VALUES ('.$sql->Param('1').','.$sql->Param('2').','.$sql->Param('3').','.$sql->Param('4').')'),array($nl_email,$_SERVER['REMOTE_ADDR'],$_SERVER['HTTP_USER_AGENT'],$td));
			if($stmt == true){
				echo 'success';
			}
		}
	}else{
		echo 'validate';
	}
}else{
	echo 'empty';
}
