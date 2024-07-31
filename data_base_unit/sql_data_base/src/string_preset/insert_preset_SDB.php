<?php
/************************************
*									*
*		Editor insert string		*
*	Using to creating insert query	*
*									*
************************************/
class insert_string_worker_SDB extends insert_string_processor_SDB
{
	private static int $count;
	private static string $where;
	public static array $elements;
	
	public static function init():string
	{
		$query = self::start(self::$where);
		
		for($i = 0; $i < self::$count-1; $i++){
			$query .= self::keys_enter(self::$elements[$i]);
		}
		
		$query .= self::keys_enter_end(end(self::$elements));
		$query .= self::$after_base;
		
		for($j = 0; $j < self::$count-1; $j++){
			$query .= self::$before_close;
		}
		
		$query .= self::$close;
		
		return $query;
	}
	
	public function __construct(
		string $where, 
		array $parametrs
	)
	{
		self::$count = count($parametrs);
		self::$where = $where;
		self::$elements = array_translator_SDB::element_translator($parametrs);
	}
}
?>