<?php

require __DIR__ . '/vendor/autoload.php';

$db = include __DIR__ . '/config/db.php';

//list($driver, $host, $database, $username, $password, $charset, $collation) = $db['development'];

return [
	'paths' => [
		'migrations' => [
			__DIR__ . '/db/migrations'
		],
		'seeds' => [
			__DIR__ . '/db/seeds'
		]
	],
	'environments' => [
		'default_migration_table' => 'migrations',
		'default_database' => 'development',
		'development' => [
			'adapter' => $db['development']['driver'],
			'host' => $db['development']['host'],
			'name' => $db['development']['database'],
			'user' => $db['development']['username'],
			'pass' => $db['development']['password'],
			'charset' => $db['development']['charset'],
			'collation' => $db['development']['collation']
		]
	]
];