<?php

// absolute filesystem path to this web root
define('WWW_DIR', __DIR__);

// absolute filesystem path to the application root
define('APP_DIR', WWW_DIR . '/../app');

// absolute filesystem path to the third library
define('LIBS_DIR', WWW_DIR . '/../libs');

// absolute filesystem path to the third library
define('VENDORS_DIR', WWW_DIR . '/../../vendor');

// Load Composer
require_once LIBS_DIR . '/autoload.php';

// Configure application
$data = Nette\Utils\Neon::decode(file_get_contents(APP_DIR . '/config.neon'));

$source->schema[0]->database[0] = $data['common']['parameters']['database']['database'];
foreach ($source->access[0] as $row) {
	if ($row['type'] == 'user') {
		$row['login'] = $data['common']['parameters']['database']['username'];
		$row['password'] = $data['common']['parameters']['database']['password'];
	}
	if ($row['type'] == 'admin') {
		$row['login'] = $data['common']['parameters']['databaseadmin']['username'];
		$row['password'] = $data['common']['parameters']['databaseadmin']['password'];
	}
}

