<?php
/********************
*					*
*	searc page unit	*
*					*
********************/
	class sercher{
		public static function open($array, $param){
			while($serch = key($array)){
				if($serch == $param)
					return current($array);
				next($array);
			}
		}
	}
?>