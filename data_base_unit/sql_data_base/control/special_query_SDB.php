<?php
class special_query_SDB
{
	public static function all(string $query, $conect)
	{
		return mysqli_query($conect, $query);
	}
}
?>