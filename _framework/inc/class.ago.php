<?php $ago = new timeConvert();

class timeConvert {

     private static function convert_datetime($str) {
   		list($date, $time) = explode(' ', $str);
    	list($year, $month, $day) = explode('-', $date);
    	list($hour, $minute, $second) = explode(':', $time);
    	$timestamp = mktime($hour, $minute, $second, $month, $day, $year);
    	return $timestamp;
    }#end
	

	public static function makeAgo($timestamp){
		if($timestamp !== '0000-00-00' OR $timestamp !== '0000-00-00 00:00:00'){
			$timestamp = self::convert_datetime($timestamp);
			$difference = time() - $timestamp;
			$periods = array("sec", "min", "hr", "day", "week", "month", "year", "decade");
			$lengths = array("60","60","24","7","4.35","12","10");
			for($j = 0; $difference >= $lengths[$j]; $j++)
				$difference /= $lengths[$j];
				$difference = round($difference);
			if($difference != 1) $periods[$j].= "s";
				$ago = "$difference $periods[$j] ago";
				return $ago;
		 }else{
			return $timestamp; 
		}
    }#end
	
	
	public static function makeDiff($date, $format='a'){
		// '%y Year; %m Month; %a Day; %h Hours; %i Minute; %s Seconds' 
		global $td;
		$exp = date_diff(date_create($td), date_create($date));
		return $exp->format('%R%'.$format);
	}#end
	
	
	/*
	*@name makeZero()
	*@desc returns tax fraction
	*@param $x => number
	*/	
	public static function makeZero($x){
  		$x = ''.$x.'';
		$b = strlen($x);
		switch($b){
			case 2;
				$a = $x[0];
			break;
			
			case 3;
				$a = $x[0].''.$x[1];
			break;
			
			case 4;
				$a = $x[0].''.$x[1].''.$x[2];
			break;
			
			case 5;
				$a = $x[0].''.$x[1].''.$x[2].'0';
			break;
			
			case 6;
				$a = $x[0].''.$x[1].''.$x[2].''.$x[3].''.$x[4];
			break;
			
			default:
				$a = $x;
			break;
		}
		return number_format($a.'0',0).'+';
  	}#end
	
	
	public static function getAge($dob){
		global $__;
        $dob = explode('-', $dob);
		$age = date('Y') - $dob[0];
		if($age > 0){
			return $age.' '.$__::__('years old');
		}else{
			$age = date('m') - $dob[1];
			if($age > 0){
				return $age.' '.$__::__('months old');
			}else{
				$age = date('d') - $dob[2];
				return $age.' '.$__::__('days old');
			}
		}
    }#end
	
	
	public static function getNextBD($dob){
		global $__;
        $dob = explode('-', $dob);
		$dif = $dob[1] - date('m');
		if($dif > 0){
			return $__::__('in').' '.$dif.' '.$__::__('months');
		}else{
			if($dob[1] == date('m')){
				$dif = $dob[2] - date('d');
				if($dif > 0){
					return $__::__('in').' '.$dif.' '.$__::__('days');
				}else{
					return 'passed';	
				}
			}else{
				return 'passed';
			}
		}
    }#end
	
	
	public static function validateDate($date, $format='Y-m-d H:i:s'){
		$d = DateTime::createFromFormat($format, $date);
		return $d && $d->format($format) == $date;
	}
	
	
	public static function formatDate($indate,$format='Y-M-D'){
        $output = $indate;
        $year =''; $month =''; $day='';        
        switch(strtoupper($format)) {
            case 'D/M/Y':
                $split = explode('/',$indate);
                $year = $split[2];
				$month = $split[1];
				$day = $split[0];            
            break;
            
            case 'Y-M-D':
            	$split = explode('-',$indate);
                $year=$split[0];$month=$split[1];$day=$split[2]; 
            break;
            case 'Y-M-D':
                 $output = $year.'-'.$month.'-'.$day;
            break;
            case 'D/M/Y':
                $output = $day.'/'.$month.'/'.$year;         
            break;
            
        }
        return $output;
    }#end
		
}#endClass
