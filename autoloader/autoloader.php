<?php
	function autolad(){
		/********************************
		*	All main enabled function	*
		********************************/

	    /*Global classes, don't disable*/
		include_once '../global_clases/global_test.php';
		include_once '../global_clases/global_conect.php';
		include_once '../global_clases/global_server_info.php';
		
		/*Server configuration (htaccess, pagination)*/
		include_once '../server_configuration_unit/router.php';
		include_once '../server_configuration_unit/more/chek.php';
		include_once '../server_configuration_unit/src/sercher.php';
		include_once '../server_configuration_unit/src/uri_selector.php';
		include_once '../server_configuration_unit/src/ways_and_pages.php';
		include_once '../server_configuration_unit/src/way_translater.php';
		
		/*Data base MYSQL. Don't disable*/
		include_once '../data_base_unit/sql_data_base/init_SDB.php';
		include_once '../data_base_unit/sql_data_base/control_SDB.php';
		include_once '../data_base_unit/sql_data_base/query_creator_SDB.php';
		include_once '../data_base_unit/sql_data_base/src/hooks_SDB.php';
		include_once '../data_base_unit/sql_data_base/src/array_worker_SBD.php';
		include_once '../data_base_unit/sql_data_base/src/array_translators.php';
		include_once '../data_base_unit/sql_data_base/src/counter_array_SDB.php';
		include_once '../data_base_unit/sql_data_base/src/resercher_config_SDB.php';
		include_once '../data_base_unit/sql_data_base/src/string_preset/select_preset_SDB.php';
		include_once '../data_base_unit/sql_data_base/src/string_preset/insert_preset_SDB.php';
		include_once '../data_base_unit/sql_data_base/src/string_preset/delite_preset_SDB.php';
		include_once '../data_base_unit/sql_data_base/src/string_preset/update_preset_SDB.php';
		include_once '../data_base_unit/sql_data_base/src/string_preset/string_processor/select_SDB.php';
		include_once '../data_base_unit/sql_data_base/src/string_preset/string_processor/update_SDB.php';
		include_once '../data_base_unit/sql_data_base/src/string_preset/string_processor/insert_SDB.php';
		include_once '../data_base_unit/sql_data_base/errors/error_file_SDB.php';
		include_once '../data_base_unit/sql_data_base/errors/error_controller_SDB.php';
		include_once '../data_base_unit/sql_data_base/control/special_query_SDB.php';
		include_once '../data_base_unit/sql_data_base/control/conection_SDB.php';
		include_once '../data_base_unit/sql_data_base/control/query_executer_SDB.php';
		
	    /*Encription classes*/
		include_once '../encription_unit/hasher.php';
		include_once '../encription_unit/array_reworker.php';
		include_once '../encription_unit/string_encriptor.php';
		include_once '../encription_unit/string_descriptor.php';
		
	    /*Mailer classes*/
		include_once '../send_mailer/config.php';
		include_once '../send_mailer/sender.php';
		include_once '../send_mailer/templates.php';
		
		/*Net sender*/
		include_once '../network_unit/init.php';
		include_once '../network_unit/errors/errors.php';
		include_once '../network_unit/errors/errors_templates.php';
		include_once '../network_unit/functions/tests_Net.php';
		include_once '../network_unit/functions/reworker_array_Net.php';
		include_once '../network_unit/functions/tests/href.php';
		include_once '../network_unit/functions/tests/types.php';
		include_once '../network_unit/sender/worker.php';
		include_once '../network_unit/sender/templates/template_file.php';
		include_once '../network_unit/sender/templates/templates_json.php';
		include_once '../network_unit/sender/templates/templates_rest.php';

		/*file worker*/
		include_once '../file_worker/patches.php';
		include_once '../file_worker/file_worker.php';

		/************************************************
		*	Disebled function. 							*
		*	If you need enable this, delit comment's.	*
		************************************************/
		
		/*Public site function. Include here, if this exist. Function here,is example.*/
		/*
		include_once '../public/site/registration.php';
		include_once '../public/site/login.php';
		*/
		
		/*Based functional, can editable*/
		/*
		include_once '../based_function/for_func.php';
		include_once '../based_function/key_cheker.php';
		include_once '../based_function/cheker_func.php';
		*/
		
		/*Template class. Can disable. Use to clear HTML code*/
		/*
		include_once '../server_configuration_unit/templates/footer.php';
		include_once '../server_configuration_unit/templates/header.php';
		include_once '../server_configuration_unit/templates/js.php';
		include_once '../server_configuration_unit/templates/stiles.php';
		*/
	}
	spl_autoload_register('autolad');