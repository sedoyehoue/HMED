<?php
/**
*@Name Appointment
*
*@desc This is a class that handle all appointment functions and variables
*
**/

class appointment 

{

	private $doctorId;
	private $doctorData

		/* this is to get a doctor information necessary to 
		*  make appointment 
		*
		*/
		public static function getDoctorData($doc_code)
		{
				$row = Sql::select('SELECT  DOC_FIRSTNAME,DOC_CON_CODE,DOC_ADDRESS,DOC_TEL,DOC_EMAIL,DOC_SPE_CODE,DOC_CODE  FROM `'.DBPREF.'doctors` WHERE DOC_CODE ='.$sql->Param('1').' ', array($doc_code), 'row' );

				if($row){ 
					return $row;
				} else {

					return $sql->errorMsg();
				}


		}

		public static function getDoctJobSite($doc_code)
		{
			$row = Sql::select('SELECT SIT_CODE, SIT_NAME, SIT_ADDRESS, SIT_DESC, SIT_DOC_CODE   FROM `'.DBPREF.'job_site` WHERE SIT_DOC_CODE ='.$sql->Param('1').' ', array($doc_code), 'row' );

				if($row){ 
					return $row;
				} else {

					return $sql->errorMsg();
				}
		}


		public static function getDocConsultationList($params=array())
		{
			$rows = Sql::select('SELECT CON_NAME,CON_CODE   FROM `'.DBPREF.'consultation` WHERE CON_CODE IN ('.$sql->Param('1').') ', array($params), 'rows' );

				if($row){ 
					return $rows;
				} else {

					return $sql->errorMsg();
				}
		}











}






?>

