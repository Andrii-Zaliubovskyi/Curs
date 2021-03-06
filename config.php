<?php

$config = array(

	'base_path' => '/Test/Curs/index.php', // base path of index.php
	
	// data base options
	'db' => array(
		'driver' => 'mysql',
		'name' => 'mydb',
		'user' => 'root',
		'pass' => '',
		'host' => 'localhost',
		'port' => '3306',
		'charset' => 'utf-8'
	),
	
	// default values for routing:
	'default_controller' => 'main',
	'default_method' => 'index',
	
	'pass_hash_salt' => '100500-qwerty-salt!' // salt for user passwords hashing

);
