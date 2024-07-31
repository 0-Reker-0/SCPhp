<?php
/************************
*						*
*	select maker string	*
*						*
************************/
class select_string_processor_SDB
{
	protected static function spc(string $where):string
	{
		return "SELECT * FROM `$where`";
	}
	
	protected static function start(string $quest, string $where):string
	{
		return "SELECT $quest FROM `$where` WHERE";
	}
	
	protected static function base($param):string
	{
		return "`$param` LIKE ? AND ";
	}
	
	protected static function close($param):string
	{
		return "`$param` LIKE ? ;";
	}
}
?>