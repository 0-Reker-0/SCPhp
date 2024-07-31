<?php
	/*Подключение к БД*/
	$conection = new control_SDB;
	$params = [
			'db' => 'test'
		];
	$conection::set($params);
	$conection::start('default');
	$conect = $conection::$conection;
?>

<!DOCTYPE HTML>
<html>
<head>
	<title>GLiib</title>
	<meta charset="UTF-8">
	<meta lang='RU'>
	<style>
		code, var, .cpre{
			background-color: #2222;
		}
		.notice{
			background-color: #f24242;
			padding: 15px;
			font-size: 20px;
			font-weight: 900;
			color: #e2fffb;
		}
		.cpre{
			letter-spacing: -0.032em;
			line-height: 1.4;
		}
		.block{
			padding: 2vw;
			margin-top: 1vh;
			display: inline-grid;
			border: 2px solid black;
			font-weight: 400;
			font-size: 3vh;
			max-width: 100vw;
		}
		h1, h2{
			text-align: center;
			align-content: center;
		}
		#container{
			padding: 5px;
			align-content: center;
			position: absolute;
		}
	</style>
</head>
<body>
<nav>
	<input type = 'button' value = 'На главную' onclick = "window.location.href = '../'">
</nav>
<div id = 'container'>
	<div class = 'block' id = 'navContainer'>
		<h1>Разделы библиотеки</h1>
		<div id = 'list'>
			<h3>Описания и функции</h3>
			<ul>
				<li><a href = '#version'>Версии</a></li>
				<li class = 'serverConfiguration'><a href = '#config'>Настройка конфигурации</a></li>
				<li class = 'serverConfiguration'><a href = '#pagenation'>Управление страницами</a></li>
				<li class = 'dataBase'><a href = '#subd'>SQL СУБД</a></li>
				<ul>
					<li><a href = '#sql_con'>Подключение</a></li>
					<li><a href = '#sql_query'>Обработка SQL-запросов</a></li>
					<li><a href = '#sql_spec_query'>Заготовленные SQL-запросы<</a></li>
				</ul>
				<li class = 'dataBase'><a href = '#FileSubd'>Файловая СУБД</a></li>
				<li class = 'nwtvork'><a href = '#ftpSocet'>Система управления сокетами и протоколами</a></li>
				<li class = 'nwtvork'><a href = '#mailSender'>Отправка электронной почты</a></li>
				<li class = 'nonClased'><a href = '#multy'>Управление многопоточностью</a></li>
				<li class = 'nonClased'><a href = '#fileWorker'>Управление файлами</a></li>
			</ul>
		</div>
		<div id = 'externalContent'>
			<h3>Редактор</h3>
			<ul>
				<li class = 'serverConfiguration'><a href = '../configuration'>Настройка конфигурации и управление страницами</a></li>
				<li class = 'serverConfiguration'><a href = '../test'>Тестирование функционала</a></li>
			</ul>
		</div>
	</div>
	<div class = 'block' id = 'version'>
		<div id = 'versionStatus'>
			<h1>Версии</h1>
			Актуализация версий проводится в ручную.
			<h2>Стабильная ветка</h2>
				<ul>
				Адресация
					<li>Версия на 31.12.23 -- 0.01</li>
					<li>Версия на 03.01.24 -- 0.03</li>
					<li>Версия на 18.01.24 -- 0.06</li>
					<li>Версия на 04.02.24 -- 0.1</li>
				Управление БД
					<li>Версия на 04.02.24 -- 0.1.1</li>
					<li>Версия на 04.02.24 -- 0.1.2</li>
					<li>Версия на 06.02.24 -- 0.1.35</li>
					<li>Версия на 07.02.24 -- 0.1.4</li>
					<li>Версия на 07.03.24 -- 0.5</li>
					<li>Версия на 07.04.24 -- 1.0</li>
				Общая Версия
					<li>Версия на 02.07.24 -- 1.53</li>
				</ul>
			<h2>Тестовая ветка</h2>
				<ul>
					<li>Версия на 07.02.24 -- 0.1.36</li>
				</ul>
		</div>
	</div>
	<div class = 'block' id = 'config'>
		<h1>Настройка конфигурации</h1>
		
	</div>
	<div class = 'block' id = 'pagenation'>
		<h1>Управление страницами</h1>
		
	</div>
	<div class = 'block' id = 'subd'>
		<h1>SQL СУБД</h1>
		<h2 id = 'sql_con'>Подключение</h2>
		<p>Массив параметров используемых для <code>default</code> подключения<?php var_dump($params);?> При таком использовании, подключение производится к <var>localhost</var> имя пользовател задаётся как <var>root</var> пароль отсутсвует. <br>Эти параметры можно изменять в файле по данному пути: <code>/data_base_unit/sql_data_base/sdb.conf</code></p>
		<p>Для удалённого подключения, рекомендуется использовать <code>custom</code>, в который передаются следующие параметры: <?php var_dump([
			'db'=>'your_db',
			'name'=>'your_username',
			'pass'=>'your_password',
			'ip'=>"localhost' (or '127.0.0.1')"
		])?></p>
		<p>Общий класс <code>control_SDB</code> используется для управления подключением и отключением от СУБД. <br>Для его инициализации, необходимо передать <code>control_SDB::set(param_array)</code>.<br>После чего запустить при помощи <code>control_SDB::start('param')</code>.<br><blo>Параметры, передаваемые функции <var>param</var>, описаны выше.</blockquote></p>
		<p>В случае успешного подключения, обект <var>db_conect</var> записывается в глобальную переменную класса <code>control_SDB::$conection</code> и выглядит следующим образом: <?php var_dump($conect);?></p>
		<?php $conection::stop();?>
		<p>Так же, если необходимо отключиться от СУБД, необходимо использовать <code>control_SDB::stop()</code>.<br>Он в свою очередь, закрывает открытое ранее подключение, привязаное к конкретному экземпляру.<br>После выполнения функции, параметр <code>control_SDB::$conection</code> будет выглядить так: <?php var_dump(control_SDB::$conection);?></p>
		<p>Если закрывается конкретное подключение, то связаный с ним <var>conection</var> будет выглядить следующим образом: <?php var_dump($conect);?></p>
		<p>В приложении рекомендуется устанавливать общий для всех запросов параметр <code>connection</code> в одноимённом классе, находящемся в <var>Config.php</var>.<br> Это поможет упростить разработку, благодя возможности обращения к нему. Либо, создавайте новые экземпляры <code>new control_SDB</code>, и обращайтесь к переменной экземпляра. Листинг примера:
		<pre class = 'cpre'>
	<i>//создаём экземпляр и записываем его в переменную</i>
		$conection = new control_SDB;
	<i>//задаём массив параметров</i>
		$params = [
			'db' => 'test'
		];
	<i>//подключаемся к БД с заданными параметрами</i>
		$conection::set($params);
		$conection::start('default');
	<i>//для удобства, выносим объект подключения в отдельную переменную</i>
		$conect = $conection::$conection;
	<i>//отключение</i>
		$conection::stop();
		</pre></p>
		<h2 id = 'sql_query'>Обработка SQL-запросов</h2>
		<h2 id = 'sql_spec_query'>Заготовленные SQL-запросы</h2>
		<div class = 'notice'>Важно! Заготовленные запросы зависят от симантической структуры вашей БД!</div>
		<p>Так же, существуют заготовленные запросы. К примеру, для выбора id пользователя, без создания сложных конструкций. Для этого, существуют специальные переменные в классе <var>special_query_SDB</var>. Список всех функций:</p>
		<code><ul>
		Поиск по готовомы критериям
			<li>id()</li>
			<li>name()</li>
			<li>login()</li><br>
		Специальные функции
			<li>cookie()</li>
			<li>session()</li>
		</ul></code>
		<p>Специальные запросы работают так же, как и обычныею Однако, для них нет необходимости прописывать дополнительные массивы с параметрами для сравнения. Так же, для них существуют дополнительные методы. К примеру, запись полученых параметров в куки и сессии.</p>
		<p></p>
		<p>Листинг примера: <pre class = 'cpre'>
		$search_id = 1;
	<i>//Вызов специальной функции</i>
		$query = special_query_SDB::id('table_name', $search_id, /*$connection*/);
		
	<i>/*
	    Запрос выполняется автоматически, после вызова функции. Однако стоит помнить, 
	    что запрос обрабатывается крайним подключением, если оно небыло заданно в ручную.
	*/</i>
	
	<i>//Запись переменной в куки.</i>
	<i>//Стоит помнить, что вызов функции без передачиконкретного именни.
	//Она будет записанна именем по умолчанию: simple_[i].
	
	//Для записи в сессию, происходит аналогичный вызов </i>
	
		special_query_SDB::cookie($query, /*'custom_name'*/);
		</pre></p>
	</div>
	<div class = 'block' id = 'FileSubd'>
		<h1>Файловая СУБД</h1>
	</div>
	<div class = 'block' id = 'ftpSocet'>
		<h1>Система управления сокетами и протоколами</h1>
	</div>
	<div class = 'block' id = 'mailSender'>
		<h1>Отправка электронной почты</h1>
	</div>
	<div class = 'block' id = 'multy'>
		<h1>Управление многопоточностью</h1>
	</div>
	<div class = 'block' id = 'fileWorker'>
		<h1>Управление файлами</h1>
	</div>
</div>
</body>
</html>