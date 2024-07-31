<?php
class err_mes_SDB
{
	protected static string $noparam = "<p class = 'error'>Library conection error: set minimum 1 parametr: 'db' => 'your_db_name'<br> Minimum param's exemple:<br> \$params = array('db'=>'test')</p>";
	protected static string $mode = "<p class = 'error'>Library conection error: undinifined mod.<br>Use only 'default', or 'custom'</p>";
	protected static string $nostart = "<p class = 'error'>Library conection error: connection parametr closed, or not started.</p>";
	protected static string $count = "<p class = 'error'>Library conection error: too few parametrs in one of the arrays.</p>";
	protected static string $select_noparam = "<p class = 'error'>Library creation error: too few parametrs in construct.</p>";
	protected static string $many_param = "<p class = 'error'>Library creation error: too many parametrs in hook array. Make like: ['id'] => '1' or ['id', '1']</p>";
	protected static string $noparam_init = "<p class = 'error'>Library inicialistaion error: too few parametrs in your query. Or last parametr in 'creator_SDB' empty.</p>";
	protected static string $noconect_init = "<p class = 'error'>Library inicialistaion error: your conection query and last parametr in 'global_conect_SDB' is empty.</p>";
	protected static string $nodata_init = "<p class = 'error'>Library inicialistaion error: your data to query is empty.</p>";
	protected static string $wrong_param = "<p class = 'error'>Library inicialistaion error: You take wrong parametr. Use only 'normal' or 'easy'.</p>";
}
?>