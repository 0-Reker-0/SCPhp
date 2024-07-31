<?php
class key_cheker
{	
	public static function key_translator(array $arr):array
	{
		$returned = array();
		var_dump($arr);
		while($key = current(key($arr))){
			$inp = htmlspecialchars($key);
			array_push($returned, $inp);
			next($returned);
		}
		return $returned;
	}	
}
?>