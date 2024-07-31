<?php
class hooks_SDB
{
	public static string $hook;
	public static string $seter_hook;
	
	public function __construct(array $hooks)
	{
		current($hooks) != 0 ?
		self::no_key($hooks) :
		self::with_key($hooks);
	}
	
	private static function no_key(array $data)
	{
		self::$seter_hook = $data[0];
		self::$hook 	  = $data[1];
		return;
	}
	
	private static function with_key(array $data)
	{
		if(count($data) > 1)
			return err_controller_SDB::call('many_param');
		
		self::$hook   = current($data);
		self::$seter_hook = key($data);
		return;
		
	}
}
?>