<?php
class way_translator
{
	public static function  translator()
	{
		$keys = [];
		$elem = [];
		$dir = global_dir::$dir.'/server_configuration_unit/ways.conf';
		$fp = file($dir);
		
		if(!$fp)
			return false;

		for($i = 0; $i < count($fp); $i++){
			$pr = explode(' => ', $fp[$i]);
			array_push($keys, trim($pr[0]));
			array_push($elem, trim($pr[1]));
		}

		return array_combine($keys, $elem);
	}
}
?>