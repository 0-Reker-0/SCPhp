<?php
/********************************
*	Used to correct counting	*
*		paramerts array			*
*								*
********************************/
class counter_SDB
{
	public static int $last_count1;
	public static int $last_count2;
	public static bool $last_result;
	
	public static function reserch(int $count1, int $count2):bool
	{
		if($count1 == $count2)
			return true;
		else
			return false;
	}
	
	public function __construct(int $count1, int $count2)
	{
		$result = self::reserch($count1, $count2);
		self::$last_count1 = $count1;
		self::$last_count2 = $count2;
		self::$last_result = $result;
		return $result;
	}
}
?>