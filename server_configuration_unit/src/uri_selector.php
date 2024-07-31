<?php
/********************
*					*
*	URI selector	*
*					*
********************/

class URISelector
{
	public static function selector($uri)
	{
		$set = explode('?', $uri);
		return $set[0];
	}
	
	public static function selector_last($uri)
	{
		$set = explode('/', $uri);
		return end($set);
	}
}
?>