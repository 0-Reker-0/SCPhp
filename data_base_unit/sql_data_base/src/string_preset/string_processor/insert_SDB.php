<?php
/************************
*						*
*	insert maker string	*
*						*
************************/
class insert_string_processor_SDB
{
	protected static string $after_base = ") VALUES (NULL, ";
	protected static string $before_close = "?, ";
	protected static string $close = "? );";
	
	protected static function start($where):string
	{
		return "INSERT INTO `".$where."` (`id`, ";
	}
	
	protected static function keys_enter(string $str):string
	{
		return "`$str`, ";
	}
	
	protected static function keys_enter_end(string $str):string
	{
		return "`$str`";
	}
}
?>