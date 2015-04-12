<?php

// This is the database connection configuration.
return array(
	'connectionString' => 'sqlite:'.dirname(__FILE__).'/../data/testdrive.db',
	// uncomment the following lines to use a MySQL database
	
	'connectionString' => 'mysql:host=mysql.hostinger.es;dbname=u795607054_aloha',
	'emulatePrepare' => true,
	'username' => 'u795607054_admin',
	'password' => 'admin1',
	'charset' => 'utf8',
	
);