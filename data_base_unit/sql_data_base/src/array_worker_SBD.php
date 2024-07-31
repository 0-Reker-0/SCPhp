<?php
class array_cheker_SDB
{
	public static function search(array $array, string $param)
	{
		for($i = 0; $i < count($array); $i++){
			if(key($array) == $param){
				$response = current($array);
				return $response;
			}
			next($array);
		}
	}
	
	public static function type(array $array):string
	{
		$returned = '';
		for($i = 0; $i < count($array); $i++){
			switch(gettype($array[$i])){
				case 'integer':
					$returned .= 'i';
				case 'double':
					$returned .= 'd';
				case 'string':
					$returned .= 's';
				default:
					$returned .= '';
			}
		}
		return $returned;
	}
}
?>