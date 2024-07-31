<?php
/********************
*					*
*	test param's	*
*					*
********************/
class params{
	public static function biger($param1, $param2){
		if($param1 > $param2)
			return true;
		else
			return false;
	}
	
	public static function smaller($param1, $param2){
		if($param1 < $param2)
			return true;
		else
			return false;
	}
	
	public static function comparison($param1, $param2){
		if($param1 == $param2)
			return true;
		else
			return false;
	}
}
?>