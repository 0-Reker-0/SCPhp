<?php
/************************************
*									*
*	ways and pages in application	*
*									*
************************************/
class ways_and_pages{
	
	public static array $ways;
	
	public static function array_init()
	{
		self::$ways = way_translator::translator();
	}
}
?>