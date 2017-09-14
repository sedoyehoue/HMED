<?php
final class User
{	
	
	public static function sett(){
		global $sql;
		$stmt = $sql->Execute($sql->Prepare('SELECT * FROM '.DBPREF.'setting'));
		if($stmt == false){
			 echo $sql->errorMsg();
		}else
		if($stmt->RecordCount() > 0){
			while($row = $stmt->FetchRow()){
				$data[$row['SET_FIELD']] = $row['SET_VALUE'];
			}
			return $data;
		}
	}#end
	
	
	public static function prs($x='%', $y='%'){
		global $sql;
		$stmt = $sql->Execute($sql->Prepare('SELECT * FROM `'.DBPREF.'product_sub`
		JOIN `'.DBPREF.'product` ON PRS_PRODUCT = PRD_ID
		JOIN `'.DBPREF.'product_manufacturer` ON PRD_MANUFACTURER = MAN_ID
		WHERE (PRS_ID LIKE '.$sql->Param('1').' OR PRS_SLUG LIKE '.$sql->Param('2').')
		AND PRS_PRODUCT LIKE '.$sql->Param('3').'
		AND PRS_STATUS LIKE '.$sql->Param('4').'
		ORDER BY PRS_CRDATE DESC'),array($x,$x,$y,'1'));
		if($stmt == false){
			 echo $sql->errorMsg();
		}else
		if($stmt->RecordCount() > 0){
			return $x=='%'?$stmt->GetRows():$stmt->FetchRow();
		}else{
			return array();	
		}
	}#end
	
	
}#endClass
