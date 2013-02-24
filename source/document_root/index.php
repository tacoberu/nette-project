<?php

// absolute filesystem path to this web root
define('WWW_DIR', __DIR__);

// absolute filesystem path to the application root
define('APP_DIR', WWW_DIR . '/../app');

// absolute filesystem path to the third library
define('LIBS_DIR', WWW_DIR . '/../libs');

// absolute filesystem path to the third library
define('VENDORS_DIR', WWW_DIR . '/../../vendor');


// uncomment this line if you must temporarily take down your site for maintenance
// require '.maintenance.php';


// load bootstrap file
require APP_DIR . '/bootstrap.php';
