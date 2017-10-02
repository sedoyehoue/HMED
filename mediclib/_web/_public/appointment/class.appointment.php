<?php
/**
*@Name Appointment
*
*@desc This is a class that handle all appointment functions and variables
*
**/

class appointment 

{

	

		/* this is to set appointment 
		*
		*/
		public static function setAppointment($params=array())
		{
				$stmt = $sql->Execute($sql->Prepare('INSERT INTO `'.DBPREF.'appointment`(APP_CODE, APP_DATE_CREATED, APP_SCH_DATE, APP_SCH_TIME, APP_REASON, APP_DOC_CODE, APP_SIT_CODE) VALUES ('.$sql->Param('1').', '.$sql->Param('2').', '.$sql->Param('3').','.$sql->Param('4').', '.$sql->Param('5').', '.$sql->Param('6').', '.$sql->Param('7').')',array=($app_code,$created_date,$sch_date,$sch_time,$reason,$doc_code,$sit_code));
				if($stmt){
					
					return $stmt->insert_id;;
				} else {
					return false;
				}

		}

		public static function getAppointment()
		{
			
			
		}











} //end of class






?>

