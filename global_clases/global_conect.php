<?php
/****************************************
*			Initialization DB			*
*										*
*	exemple template (make like this):	*
*	'db'=>'test',						*
*	'name'=>'user',						*
*	'pass'=>'123',						*
*	'ip'=>'localhost'(or '127.0.0.1')	*
*										*
****************************************/
class global_conect_SDB
{
    public static $connect;
    
    public function __construct(string $db, string $stat)
    {
        $conection = new control_SDB;
        $params = [
        		'db' => $db
        	];
        $conection::set($params);
        $conection::start($stat);
        $con_true = $conection::$conection;
        self::$connect = $con_true;
        return $con_true;
    }
}
?>