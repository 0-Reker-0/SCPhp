<?php
class creator_SDB
{
	public static array $elements;
	public static string $last_query;
	
	/********************************************
	*				MySQL query editor			*
	*											*
	*	Select mode take 2 params, and 2 arrays	*
	*	1 parametr -> requested data			*
	*	2 parametr -> table to taking data 		*
	*	1 array -> serching parametrs			*
	*	2 array -> comparision parametrs		*
	*											*
	*	OR onli '*' and table to taking data	*
	********************************************/
	public static function select(
		string $where, 
		string $quest, 
		array $array = null
	):string
	{
		if(!isset($quest) || !isset($where))
			return err_controller_SDB::call('select_noparam');
		
		if($quest == '*' && empty($array))
			return select_string_worker_SDB::special($where);
		
		$quest = new select_string_worker_SDB(
			$array, 
			$quest, 
			$where
		);
		$returned = $quest::init();
		self::$elements = $quest::$elements;
		self::$last_query = $returned;
		return $returned;
	}
	
	public static function insert(
		string $where, 
		array $array_data
	):string
	{
		if(!isset($where))
			return err_controller_SDB::call('select_noparam');
		
		$quest = new insert_string_worker_SDB(
			$where, 
			$array_data
		);
		$returned = $quest::init();
		self::$elements = $quest::$elements;
		self::$last_query = $returned;
		return $returned;
	}
	
	public static function update(
		string $where,
		array $hooks,
		array $array_data
	):string
	{
		if(!isset($where) || !isset($hooks) || !isset($array_data))
			return err_controller_SDB::call('select_noparam');
		
		$hooks_worker = new hooks_SDB($hooks);
		$hook 		= $hooks_worker::$hook;
		$seter_hook = $hooks_worker::$seter_hook;
		
		$quest = new update_string_worker_SDB(
			$hook,
			$where,
			$array_data,
			$seter_hook
		);
		$returned = $quest::init();
		self::$elements = $quest::$elements;
		self::$last_query = $returned;
		return $returned;
	}
	
	public static function delite(
		string $where,
		array $hooks
	)
	{
		if(!isset($where) || !isset($hooks))
			return err_controller_SDB::call('select_noparam');
		
		$hooks_worker = new hooks_SDB($hooks);
		$hook 		= $hooks_worker::$hook;
		$seter_hook = $hooks_worker::$seter_hook;
		
		$quest = new delite_string_worker_SDB(
			$hook,
			$where,
			$seter_hook
		);
		$returned = $quest::init();
		self::$elements = $quest::$elements;
		self::$last_query = $returned;
		return $returned;
	}
	
	public static function create()
	{
		
	}
}
?>