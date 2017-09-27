<?php
final class Doctors
{
	
	public static function doc($params=array()){
		global $sql;
		$data = array();
		$city = isset($params['city'])?$params['city']:'%';
		$title = isset($params['title'])?$params['title']:'%';
		$region = isset($params['region'])?$params['region']:'%';
		$status = isset($params['status'])?$params['status']:'%';
		$doctor = isset($params['doctor'])?$params['doctor']:'%';
		$query = isset($params['query'])?$params['query']:'';
		$limit = isset($params['limit'])?$params['limit']:'*';
		
		$query = explode(' ', $query);
		foreach($query as $q){
			$stmt = $sql->Execute($sql->Prepare('SELECT * FROM `'.DBPREF.'doctors`
			WHERE DOC_ID LIKE '.$sql->Param('1').'
			AND DOC_REGION LIKE '.$sql->Param('2').'
			AND DOC_CITY LIKE '.$sql->Param('3').'
			AND DOC_TITLE LIKE '.$sql->Param('4').'
			AND DOC_STATUS LIKE '.$sql->Param('5').' '.(($limit=='*')?'':'LIMIT '.$limit).''), array($doctor, $region, $city, $title, $status));
			$data[] = $stmt->GetRows();
		}
		if(count($data) > 0){
			return $data;
		}else{
			return array();	
		}
	}#end
	
	
}#endClass
