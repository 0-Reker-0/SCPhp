<!DOCTYPE HTML>
<html>
<head>
	<title>GLiib</title>
	<meta charset="UTF-8">
	<meta lang='RU'>
</head>
<body>
<nav>
	<input type = 'button' value = 'На главную' onclick = "window.location.href = '../'">
</nav>
	Тестирование функционала:<br>
	Select c запросом:<hr>
	<div>
		$query = (creator_SDB::select('*', 'test', []));<br>
		$test = new init_SDB($query, null, null);<br>
		$test::init_query('easy');<br>
		return $test::$last_result;<br>
	</div>
	<hr>
	<?php 
	$record = global_test::all_select_SDB();
	foreach($record as $rec){
		echo 'ID: '.$rec['id'].' Таблица А: '.$rec['a_table'].' Таблица Б: '.$rec['b_table'].' Таблица С: '.$rec['c_table'].'<br>';
	}	
	?>
	<hr>
	Пояснение: init_SDB($query, null, null) -><br>
	1. Тело запроса.<br>
	2. Данные для запроса (Может быть массивом параметров. В данном случае запрос не указан.)<br>
	3. БД (так как null, использовалась дефолтное подключение из 'global_conect.php'.)<br>
	Пояснение 2: init_query('easy') -><br>
	1. 'easy' - Это индетификатор упрощёного запроса.<br><br><hr><br>
	
	Select c запросом:<hr>
	<div>
		$query = (creator_SDB::select('*', 'test', ['id']));<br>
		$test = new init_SDB($query, ['2'], null);<br>
		$test::init_query('normal');<br>
		return $test::$last_result;<br>
	</div>
	<hr>
	<?php
	$record1 = global_test::select_query();
	foreach($record1 as $rec){
		echo 'ID: '.$rec['id'].' Таблица А: '.$rec['a_table'].' Таблица Б: '.$rec['b_table'].' Таблица С: '.$rec['c_table'].'<br>';
	}
	?>
	<hr>
	Пояснение: init_SDB($query, ['2'], null) -><br>
	1. Тело запроса.<br>
	2. Данные для запроса (Может быть массивом параметров. В данном случае запрос не указан.)<br>
	3. БД (так как null, использовалась дефолтное подключение из 'global_conect.php'.)<br>
	Пояснение 2: init_query('normal') -><br>
	1. 'normal' - Это индетификатор обычного STMT запроса.<br><hr><br>
</body>
</html>