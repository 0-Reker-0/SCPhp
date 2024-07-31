<?php
/************************************
*									*
*		Editor update string		*
*	Using to creating update query	*
*									*
************************************/
class update_string_worker_SDB extends update_string_processor_SDB
{
	protected static int 		$count;
	protected static string 	$hook;
	protected static string 	$where;
	protected static string 	$seter_hook;
	public  static array 	$elements;
	
	public static function init():string
	{
		$query = self::start(self::$where);
		
		for($i = 0; $i < self::$count-1; $i++){
			$query .= self::keys_enter(self::$elements[$i]);
		}
		$query .= self::keys_enter_end(end(self::$elements));
		
		$query .= self::close(self::$seter_hook, self::$hook);
		
		return $query;
	}
	
	public function __construct(
		string $hook,
		string $where,
		array $parametrs,
		string $seter_hook
	)
	{
		self::$count		= count($parametrs);
		self::$hook 		= trim(htmlspecialchars($hook));
		self::$where 		= trim(htmlspecialchars($where));
		self::$seter_hook 	= trim(htmlspecialchars($seter_hook));
		self::$elements 	= array_translator_SDB::element_translator($parametrs);
	}
}
?>