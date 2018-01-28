<?php
require 'environment.php';



$config = array();


if (ENVIRONMENT == 'development') {
	define("BASE_URL", "http://localhost/PhpProjectNutricao/");
	$config['dbname']='clinica_db';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}
else{

		//define("BASE_URL", "http://localhost/nutricao/");
        $config['dbname']='clinica_db';
	$config['host']='localhost';
	$config['dbuser']='root';
	$config['dbpass']='';
}


