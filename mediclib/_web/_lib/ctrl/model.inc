<?php
$sett = Model::sett();

final class Model
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
		
	
	public static function sldHOM(){
		$slider = array(
			array(
				'image'=>'1',
				'title'=>array('Clarius Wireless','Ultrasounds'),
				'link'=>'https://youtube.com/watch?v=azEI8v5BPRY'
			),
			array(
				'image'=>'2',
				'title'=>array('sonoscape S50','Ultrasounds '),
				'link'=>''
			),
			array(
				'image'=>'3',
				'title'=>array('Immuno Analyzer',''),
				'link'=>''
			),
			array(
				'image'=>'4',
				'title'=>array('Service','Technical '),
				'link'=>''
			),
		);
		return $slider;	
	}#end
	
	
	public static function sldPRD(){
		$slider = array(
			array(
				'image'=>'5',
				'title'=>array('PCR /Test Kit',''),
				'link'=>''
			),
			array(
				'image'=>'6',
				'title'=>array('Icubio Chemistry + Reagents',''),
				'link'=>''
			),
			array(
				'image'=>'7',
				'title'=>array('Vinno E30',''),
				'link'=>''
			),
			array(
				'image'=>'8',
				'title'=>array('Anesthesia',''),
				'link'=>''
			),
			array(
				'image'=>'9',
				'title'=>array('X-ray',''),
				'link'=>''
			)
		);
		return $slider;	
	}#end
	
	
	public static function ctg($x='%',$y='0'){
		global $sql;
		$stmt = $sql->Execute($sql->Prepare('SELECT * FROM `'.DBPREF.'product_category`
		WHERE CTG_SLUG LIKE '.$sql->Param('1').'
		AND CTG_STATUS LIKE '.$sql->Param('2').'
		AND CTG_PARENT LIKE '.$sql->Param('3').'
		ORDER BY CTG_CRDATE DESC'),array($x,'1',$y));
		if($stmt == false){
			 echo $sql->errorMsg();
		}else
		if($stmt->RecordCount() > 0){
			return $x=='%'?$stmt->GetRows():$stmt->FetchRow();
		}else{
			return array();	
		}
	}#end
	
	
	public static function ctgMenu(){
		global $sql,$categories;
		$ctgMenu = '';
		$alias = 'CAT.CTG_NAME AS CAT_NAME, CAT.CTG_SLUG AS CAT_SLUG, SUB.CTG_NAME AS SUB_NAME, SUB.CTG_SLUG AS SUB_SLUG';
		foreach($categories as $ctg):
			$stmt = $sql->Execute($sql->Prepare('SELECT *,'.$alias.' FROM `'.DBPREF.'product`
			JOIN `'.DBPREF.'product_category` CAT ON PRD_CATEGORY = CAT.CTG_ID
			JOIN `'.DBPREF.'product_category` SUB ON PRD_CATEGORY_SUB = SUB.CTG_ID
			#JOIN `'.DBPREF.'product_sub` ON PRS_PRODUCT = PRD_ID
			WHERE CAT.CTG_ID LIKE '.$sql->Param('1').'
			ORDER BY PRD_CRDATE DESC'),array($ctg['CTG_ID']));
			$products = $stmt->GetRows();
			$ctgMenu .= '<li class="single-mega-menu">';
			$ctgMenu .= '<a href="'.WEB.'products/'.$ctg['CTG_SLUG'].'"><h2>'.ucwords($ctg['CTG_NAME']).'</h2></a>';
			foreach($products as $prd):
					$ctgMenu .= '<a href="'.WEB.'products/'.$prd['CAT_SLUG'].'/'.$prd['SUB_SLUG'].'/'.$prd['PRD_SLUG'].'">'.ucwords($prd['PRD_NAME']).'</a>';
			endforeach;
		endforeach;
		return $ctgMenu;
	}#end
	
	
	public static function prd($x='%',$y='%',$z='%'){
		global $sql;
		$data = array();
		$z = empty($z)?'%':$z;
		$categories = self::ctg($z,$y);
		$categories = $z=='%'?$categories:array($categories); 
		$alias = 'CAT.CTG_NAME AS CAT_NAME, CAT.CTG_SLUG AS CAT_SLUG, SUB.CTG_NAME AS SUB_NAME, SUB.CTG_SLUG AS SUB_SLUG';
		foreach($categories as $ctg):
			$stmt = $sql->Execute($sql->Prepare('SELECT *,'.$alias.' FROM `'.DBPREF.'product`
			JOIN `'.DBPREF.'product_category` CAT ON PRD_CATEGORY = CAT.CTG_ID
			JOIN `'.DBPREF.'product_category` SUB ON PRD_CATEGORY_SUB = SUB.CTG_ID
			JOIN `'.DBPREF.'product_sub` ON PRS_PRODUCT = PRD_ID
			WHERE PRD_SLUG LIKE '.$sql->Param('1').'
			AND CAT.CTG_ID LIKE '.$sql->Param('2').'
			AND SUB.CTG_ID LIKE '.$sql->Param('3').'
			AND PRD_STATUS LIKE '.$sql->Param('4').'
			GROUP BY PRD_ID ORDER BY PRD_CRDATE DESC'),array($x,$ctg['CTG_PARENT'],$ctg['CTG_ID'],'1'));
			if($stmt->RecordCount() > 0){
				$x== '%'?$data[$ctg['CTG_NAME']] = $stmt->GetRows():$data = $stmt->FetchRow();
			}
		endforeach;
		return $data;
	}#end
	
	
	public static function prs($x='%',$y='%'){
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
	
	
	public static function evt($x='%',$y='*'){
		global $sql;
		$stmt = $sql->Execute($sql->Prepare('SELECT * FROM `'.DBPREF.'event`
		WHERE EVT_SLUG LIKE '.$sql->Param('1').'
		AND EVT_STATUS LIKE '.$sql->Param('2').'
		ORDER BY EVT_CRDATE DESC '.(($y=='*')?'':'LIMIT '.$y).''),array($x,'1'));
		if($stmt == false){
			 echo $sql->errorMsg();
		}else
		if($stmt->RecordCount() > 0){
			return $x=='%'?$stmt->GetRows():$stmt->FetchRow();
		}else{
			return array();	
		}
	}#end
	
	
	public static function svc($x='%',$y='*'){
		global $sql;
		$stmt = $sql->Execute($sql->Prepare('SELECT * FROM `'.DBPREF.'service`
		WHERE SVC_SLUG LIKE '.$sql->Param('1').'
		ORDER BY SVC_CRDATE DESC '.(($y=='*')?'':'LIMIT '.$y).''),array($x));
		if($stmt == false){
			 echo $sql->errorMsg();
		}else
		if($stmt->RecordCount() > 0){
			return $x=='%'?$stmt->GetRows():$stmt->FetchRow();
		}else{
			return array();	
		}
	}#end
	
	
	public static function man(){
		global $sql;
		$stmt = $sql->Execute($sql->Prepare('SELECT * FROM `'.DBPREF.'product_manufacturer`'));
		if($stmt == false){
			 echo $sql->errorMsg();
		}else
		if($stmt->RecordCount() > 0){
			return $stmt->GetRows();
		}else{
			return array();	
		}
	}#end
	
	
	public static function pag($x='%'){
		global $sql;
		$stmt = $sql->Execute($sql->Prepare('SELECT * FROM `'.DBPREF.'page`
		WHERE PAG_SLUG LIKE '.$sql->Param('1').' LIMIT 1'),array($x));
		if($stmt == false){
			 echo $sql->errorMsg();
		}else
		if($stmt->RecordCount() > 0){
			return $stmt->FetchRow();
		}else{
			return false;	
		}
	}#end
	
	
	public static function gal($x='%'){
		global $sql;
		$stmt = $sql->Execute($sql->Prepare('SELECT * FROM `'.DBPREF.'gallery`
		WHERE GAL_SLUG LIKE '.$sql->Param('1').' ORDER BY GAL_CRDATE DESC '),array($x));
		if($stmt == false){
			 echo $sql->errorMsg();
		}else
		if($stmt->RecordCount() > 0){
			return $x=='%'?$stmt->GetRows():$stmt->FetchRow();
		}else{
			return false;	
		}
	}#end
	
	
	public static function sid($x,$y='1'){
		global $sql;
		$data = self::gal($x);
		if(count($data) > 1){
		$images = md5_($data['GAL_IMAGES']);
			shuffle($images);
			for($i=0; $i < $y; $i++): $img = $images[$i];
				echo '<small class="text-muted">-- click to enlarge ---</small>
				<a class="fancybox" data-fancybox-group="group" href="'._WEB_.'img/gal/'.$img.'">
				<img class="thumbnail" src="'._WEB_.'img/gal/'.$img.'" alt="'.$data['GAL_NAME'].'"></a> <br/>';
			endfor;
		}
	}#end
	
	
}#endClass


class Sprache
{
	public static function __($x){
		return $x;
	}#end
	
}#endClass
