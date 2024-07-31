<?php
/************************
*						*
*	update maker string	*
*						*
************************/
class update_string_processor_SDB
{
	protected static string $where;
	
	protected static function start($where):string
	{
		self::$where = $where;
		return "UPDATE `".$where."` ";
	}
	
	protected static function keys_enter(string $str):string
	{
		return "SET `$str` = ? , ";
	}
	
	protected static function keys_enter_end(string $str):string
	{
		return "SET `$str` = ? ";
	}
	
	protected static function close(string $seter_hook, string $hook):string
	{
		return "WHERE `".self::$where."`.`".$seter_hook."` = '".$hook."';";
	}
}
?>