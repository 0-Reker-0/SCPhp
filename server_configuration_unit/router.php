<?php
/************************
*						*
*	URI config File		*
*						*
************************/
class Route{
	
	public static function serch($uri){
		$call = cheker::array_for(
			count(ways_and_pages::$ways),
			ways_and_pages::$ways,
			$uri
		);
		$call == false ? self::err() : self::returned($uri);
	}
	
	protected static function returned($uri){
		$call = sercher::open(
			ways_and_pages::$ways, 
			$uri
		);
		include_once global_dir::$dir.'/Pages'.$call;
		return;
	}
	
	protected static function err(){
		echo '404 not found';
		exit();
	}
}

class Run{
	
	public function run(){
		$uri = URISelector::selector($_SERVER['REQUEST_URI']);
		global_dir::$opend_elem = URISelector::selector_last($uri);
		ways_and_pages::array_init();
		Route::serch($uri);
	}
}
?>