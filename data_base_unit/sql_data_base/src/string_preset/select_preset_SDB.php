<?php
/************************************
*									*
*		Editor select string		*
*	Using to creating select query	*
*									*
************************************/
class select_string_worker_SDB extends select_string_processor_SDB
{
	public static array $elements;
	protected static string $where;
	protected static string $quest;
	protected static int $count;
	
	public static function special(string $where):string
	{
		return self::spc($where);
	}
	
	public static function init():string
	{
		$query = self::start(self::$quest, self::$where);
		
		for($i = 0; $i < self::$count; $i++){
			if($i != (self::$count-1))
				$query .= self::base(self::$elements[$i]);
			else
				$query .= self::close(self::$elements[$i]);
		}
		
		return $query;
	}
	
	public function __construct(
		array $array, 
		string $quest, 
		string $where
	)
	{
		self::$quest = $quest;
		self::$where = $where;
		self::$count = count($array);
		self::$elements = array_translator_SDB::element_translator($array);
	}
}
?>