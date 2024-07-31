<?php
class init_SDB
{
	public static $last_result;
	private static $conect;
	private static $data;
	private static string $query; 
	
	public function __construct(
		string $query, 
		$data = null, 
		$mysql_conect_data = null
	)
	{
		if(!isset($query))
			creator_SDB::$last_query ? 
			$query = creator_SDB::$last_query : 
			self::shutdown('noparam_init');
			
		if(!isset($data) && $data != null) 
			self::shutdown('nodata_init');
		
		if(!isset($mysql_conect_data) || $mysql_conect_data == null)
			global_conect_SDB::$connect ? 
			$mysql_conect_data = global_conect_SDB::$connect : 
			self::shutdown('noconect_init');
			
		self::$data = $data;
		self::$conect = $mysql_conect_data;
		self::$query = $query;
	}
	
	public static function init_query(string $type)
	{
		if($type == 'normal')
			$res = executer_SDB::init(
				self::$query, 
				self::$data, 
				self::$conect
			);
		elseif($type == 'easy')
			$res = special_query_SDB::all(
				self::$query, 
				self::$conect
			);
		else
			self::shutdown('wrong_param');
		
		self::succes($res);
	}
	
	private static function shutdown($param)
	{
		switch($param){
			case 'noparam_init':
				exit(err_controller_SDB::call('noparam_init'));
			case 'nodata_init':
				exit(err_controller_SDB::call('nodata_init'));
			case 'noconect_init':
				exit(err_controller_SDB::call('noconect_init'));
			case 'wrong_param':
				exit(err_controller_SDB::call('wrong_param'));
			default:
				return;
		}
	}
	
	private static function succes($res)
	{
		self::$last_result = $res;
		return;
	}
}
?>