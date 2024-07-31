<?php
/********************
*					*
*	Data Base Unit	*
*					*
********************/
class control_SDB
{
	public static $conection;
	protected static string $db;
	protected static string $ip;
	protected static string $user;
	protected static string $pass;
	
	public static function set($parametrs)
	{
		if(!is_array($parametrs)){
			echo err_controller_SDB::call('noparam');
			exit();
		}
		/*Set data base name*/
		$db_con = array_cheker_SDB::search($parametrs, 'db');
		$db_con ? self::$db = $db_con : '';
		
		/*Set connection adres*/
		$ip_con = array_cheker_SDB::search($parametrs, 'ip');
		$ip_con ? self::$ip = $ip_con : '';
		
		/*Set DB username*/
		$user_con = array_cheker_SDB::search($parametrs, 'name');
		$user_con ? self::$user = $user_con : '';
		
		/*Set DB password*/
		$pass_con = array_cheker_SDB::search($parametrs, 'pass');
		$pass_con ? self::$pass = $pass_con : '';
	}
	
	public static function start($mode)
	{
		switch ($mode){
			case 'default':
				self::$conection = conect_SDB::init(self::$db);
				return;

			case 'custom':
				self::$conection = conect_SDB::init_custom(
					self::$ip,
					self::$user,
					self::$pass,
					self::$db
				);
				return;
				
			default:
				echo err_controller_SDB::call('mode');
				exit();
		}
	}
	
	public static function stop()
	{
		if(empty(self::$conection)){
			echo err_controller_SDB::call('nostart');
			return;
		}
		
		conect_SDB::stop(self::$conection);
		self::$conection = null;
	}
}
?>