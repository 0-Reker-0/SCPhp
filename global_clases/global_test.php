<?php
class global_test
{
	/****************************
	*	Simple DB function test	*
	****************************/
	public static function all_select_SDB()
	{
		/****************************************
		*	1st => table where nead update data	*
		*	2nd => paranetr select.				*
		*	3rd => what's to select				*
		****************************************/
		$query = (creator_SDB::select('test', '*', []));
		/****************************
		*	1st => query 			*
		*							*
		*	not nedable 			*
		*	2nd => DB connection	*
		****************************/
		$test = new init_SDB($query);
		/*Easy*/
		$test::init_query('easy');
		return $test::$last_result;
	}
	
	public static function select_query()
	{	
		/****************************************
		*	1st => table where nead update data	*
		*	2nd => paranetr select.				*
		*	3rd => what's to select				*
		****************************************/
		$query = (creator_SDB::select('test', '*', ['id']));
		/****************************
		*	1st => query 			*
		*	2nd => data to update	*
		*							*
		*	not nedable 			*
		*	3rd => DB connection	*
		****************************/
		$test = new init_SDB($query, ['2']);
		/*Normal*/
		$test::init_query('normal');
		return $test::$last_result;
	}
	
	public static function update_query()
	{
		/************************************************************
		*	1st => table where nead update data						*
		*	2nd => hooks array. It's nead to select entry in table.	*
		*	Can be: ['parametr' => 'parametr_data']					*
		*	or ['parametr', 'parametr_data']						*
		*	3rd => what's to change									*
		************************************************************/
		$query = (creator_SDB::update('test', ['id' => '1'], ['id']));
		/****************************
		*	1st => query 			*
		*	2nd => data to update	*
		*							*
		*	not nedable 			*
		*	3rd => DB connection	*
		****************************/
		$test = new init_SDB($query, ['5']);
		/*Only normal*/
		$test::init_query('normal');
		return $test::$last_result;
	}
	
	public static function delite_query()
	{
		/************************************************************
		*	1st => table where nead update data						*
		*	2nd => hooks array. It's nead to select entry in table.	*
		*	Can be: ['parametr' => 'parametr_data']					*
		*	or ['parametr', 'parametr_data']						*
		************************************************************/
		$query = (creator_SDB::delite('test', ['id' => '1']));
		/****************************
		*	1st => query 			*
		*							*
		*	not nedable 			*
		*	2nd => DB connection	*
		****************************/
		$test = new init_SDB($query);
		/*Only easy*/
		$test::init_query('easy');
		return $test::$last_result;
	}
	
	public static function insert_query()
	{
		/****************************************
		*	This array nead to set input data	*
		****************************************/
		$arr_put = array(
            trim('logn'),
            trim(hashing::simple_hash('pass')),
            trim('mail'),
            date("Y-m-d H:i:s")
        );
		/********************************************
		*	This array nead to set column in table	*
		********************************************/
        $arr_table = array(
            'login',
            'mail',
            'password',
            'date_registration'
        );
		/************************************************************
		*	1st => table where nead insert data						*
		*	2nd => hooks array. It's nead to select entry in table.	*
		*	Can be: ['parametr' => 'parametr_data']					*
		*	or ['parametr', 'parametr_data']						*
		************************************************************/
        $query = (creator_SDB::insert('users', $arr_table));
		/****************************
		*	1st => query 			*
		*	2nd => data to insert	*
		*							*
		*	not nedable 			*
		*	3rd => DB connection	*
		****************************/
		$test = new init_SDB($query, $arr_put);
		$test::init_query('normal');
	}

	/****************************
	*	network function test	*
	****************************/
	
	public static function test_rest_method_1()
	{
		/************************************
		*	1st => transponding data array	*
		*	2nd => type						*
		*	can be rest\json and upper case	*
		*	3rd => where need send			*
		************************************/
		$initialisator = new init_Net(
			['password', 'login'],
			'rest',
			'https://test.com'
		);
		/********************************
		*	take nothing\normal\file	*
		********************************/
		$initialisator->init();
		init_Net::debud_Net('info');
	}

	public static function test_rest_method_2()
	{
		/********************************************************
		*	can take nothing, and use first initialisation data	*
		*	like first method, but use all-in-one function		*
		********************************************************/
		init_Net::init_fast(
			['password','login'],
			'REST',
			'https://test2.com'
		);
		init_Net::debud_Net('info');
	}
}
?>