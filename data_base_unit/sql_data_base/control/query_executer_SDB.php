<?php
class executer_SDB
{	
	public static function init(
		string $query, 
		array $data, 
		$conect
	)
	{
		$intr = array_translator_SDB::element_translator($data);
		$type = array_cheker_SDB::type($intr);
		
		if(!mysqli_thread_safe())
			return false;
		
		$stmt = mysqli_stmt_init($conect);
		$stmt -> prepare($query);
		
		$params = [$type];
        foreach ($intr as &$value) {
            $params[] = &$value;
        }
        call_user_func_array(array($stmt, 'bind_param'), $params);
		
		$stmt -> execute();
		$returned = $stmt -> get_result();
		
		$stmt -> close();
		return $returned;
	}
}
?>