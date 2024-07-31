<?php
class err_controller_SDB extends err_mes_SDB
{
	public static function call($code):string
	{
		switch($code){
			case 'noparam': 
				exit(self::$noparam);
			case 'mode':
				exit(self::$mode);
			case 'nostart':
				exit(self::$nostart);
			case 'count':
				exit(self::$count);
			case 'select_noparam':
				exit(self::$select_noparam);
			case 'noparam_init':
				exit(self::$noparam_init);
			case 'noconect_init':
				exit(self::$noconect_init);
			case 'nodata_init':
				exit(self::$nodata_init);
			case 'wrong_param':
				exit(self::$wrong_param);
			case 'many_param':
				exit(self::$many_param);
			default: 
				return false;
		}
	}
}
?>