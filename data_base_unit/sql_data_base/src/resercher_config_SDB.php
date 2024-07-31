<?php
class resercher_config_SDB
{
	private static string $dir = '../data_base_unit/sql_data_base/sdb.conf';
	
	public static function search():array
	{
		$retrn = array();
		$fp = fopen(self::$dir, 'r');
		
		/*read ip*/
		array_push($retrn, fgets($fp));
		fseek($fp, 0, SEEK_CUR);
		
		/*read username*/
		array_push($retrn, fgets($fp));
		fseek($fp, 0, SEEK_CUR);
		
		/*read password*/		
		$pass = fgets($fp);
		if(trim($pass) == 'none')
			array_push($retrn, '');
		else
			array_push($retrn, $pass);
		
		/*close discriptor*/
		fclose($fp);
		return $retrn;
	}
}
?>