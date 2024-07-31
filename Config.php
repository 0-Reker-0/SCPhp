<?php
/************************
*						*
*	Configuration File	*
*						*
************************/
include __DIR__.'/autoloader/autoloader.php';

/********************************
*								*
*	Starting directoey system	*
*								*
********************************/
new global_dir(__DIR__, 'localhost');

/********************************************
*		Parametr Initialezation				*
*											*
*	Use 'default', if you add onli DB name	*
*	Use 'custom', if you add all parametr	*
*											*
********************************************/
new global_conect_SDB('test', 'default');

session_start();
/****************************
*							*
*	Initialization project	*
*							*
****************************/
$run = new Run;
$run -> run();
?>
