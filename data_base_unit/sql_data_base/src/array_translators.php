<?php
class array_translator_SDB
{
	public static function element_translator(array $arr):array
	{
		$returned = array();
		foreach($arr as $val){
			$elem = htmlspecialchars($val);
			array_push($returned, $elem);
		}
		return $returned;
	}
}
?>