<?php
/************************************
*									*
*		Editor delite string		*
*	Using to creating delite query	*
*									*
************************************/
class delite_string_worker_SDB
{
	private static string $hook;
	private static string $where;
	private static string $seter_hook;
	
	public static function init():string
	{
		return "DELETE FROM `".self::$where."` WHERE `".self::$where."`.`".self::$seter_hook ."` = ".self::$hook.";";
	}
	
	public function __construct(
		string $hook,
		string $where,
		string $seter_hook
	)
	{
		self::$hook 		= trim(htmlspecialchars($hook));
		self::$where 		= trim(htmlspecialchars($where));
		self::$seter_hook 	= trim(htmlspecialchars($seter_hook));
	}
}
?>