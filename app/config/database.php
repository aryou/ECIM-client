<?php
/**
 * @todo set different database configurations 
 */
switch(App::environment()) {
	case 'local':
	case 'dev':
	case 'test':
	case 'production':
	default:
		return array(
			'fetch' => PDO::FETCH_CLASS,
			'default' => 'pgsql',
			// database connections
			'connections' => array(
		
				'sqlite' => array(
					'driver'   => 'sqlite',
					'database' => __DIR__.'/../database/production.sqlite',
					'prefix'   => '',
				),
				
				'mysql' => array(
					'driver'    => 'mysql',
					'host'      => 'localhost',
					'database'  => 'forge',
					'username'  => 'forge',
					'password'  => '',
					'charset'   => 'utf8',
					'collation' => 'utf8_unicode_ci',
					'prefix'    => '',
				),
		
				'pgsql' => array(
					'driver'   => 'pgsql',
					'host'     => 'localhost',
					'database' => 'ECIM',
					'username' => 'aryou',
					'password' => 'singlehop',
					'charset'  => 'utf8',
					'prefix'   => '',
					'schema'   => 'public',
				),
		
				'sqlsrv' => array(
					'driver'   => 'sqlsrv',
					'host'     => 'localhost',
					'database' => 'database',
					'username' => 'root',
					'password' => '',
					'prefix'   => '',
				),
		
			),
			'migrations' => 'migrations',
			'redis' => array(
		
				'cluster' => false,
		
				'default' => array(
					'host'     => 'localhost',
					'port'     => 6379,
					'database' => 0,
				),
		
			),
		
		);
	break;
}