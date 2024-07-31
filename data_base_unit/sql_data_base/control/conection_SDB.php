<?php
/********************************
*								*
*	Using to create PhpMyAdmin	*
*		or your DB connection	*
*								*
********************************/
class conect_SDB
{
	protected static string $ip;
	protected static string $user;
	protected static string $pass;
	protected static string $db;
	
	public static function init_custom($ip, $user, $pass, $db)
	{
		self::$ip = $ip;
		self::$user = $user;
		self::$pass = $pass;
		self::$db = $db;
		return self::start();
	}
	
	public static function init($db)
	{
		self::auto_edit();
		self::$db = $db;
		return self::start();
	}
	
	public static function stop($conect)
	{
		return mysqli_close($conect);
	}
	
	private static function auto_edit()
	{
		$data = resercher_config_SDB::search();
		self::$ip = trim($data[0]);
		self::$user = trim($data[1]);
		self::$pass = trim($data[2]);
		return;
	}
	
	private static function start()
	{
		$conn = mysqli_connect(
			self::$ip, 
			self::$user, 
			self::$pass, 
			self::$db
		);
		mysqli_set_charset($conn, 'utf8mb4');
		return $conn;
	}
}
?>