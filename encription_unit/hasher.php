<?php
class hashing
{
	public static string $last_get;
	public static string $last_key;
	public static string $last_result;
//	private static string $default_key = 'secur_key';
	
	public function  __construct(string $str, string $key = null)
	{
		self::$last_get = $str;
		self::$last_key = $key;
	}
	
	public static function simple_hash(string $str = null/*, string $key = null*/)
	{
		!isset($str) ? $str = self::$last_get : true;
//		!isset($key) ? $key = self::$last_key : true;
//		!isset($key) ? $key = self::$default_key : true;
		
		$res = password_hash($str, PASSWORD_ARGON2ID);
		self::$last_result = $res;
		return $res;
	}
}
?>