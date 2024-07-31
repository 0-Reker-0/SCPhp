<?php
class cheker{
	public static function array_for($numberOfTime, $array, $param){
		while($valid = key($array)){
		    $call = self::comparison($valid, $param);
			if($call){
			    $response = ['array' => $array, 'param' => $param, 'response' => true];
				return $response;
			}
			next($array);
		}
		return false;
	}
	
	protected static function comparison($param1, $param2){
		if($param1 == $param2)
			return true;
		else
			return false;
	}
}