<?php

use core\Core;
require_once '../vendor/autoload.php';

if (file_exists(dirname(__DIR__). '/.env')){
    $dotenv = Dotenv\Dotenv::createImmutable(dirname(__DIR__));
    $dotenv->load();
}

require_once '../lib/autoload/autoload.php';
require_once '../lib/database/Connection.php';
require_once '../app/core/Core.php';
require_once '../app/core/Router.php';
require_once '../app/core/BaseController.php';
require_once '../app/core/Error.php';

error_reporting(E_ALL);
set_error_handler('core\Error::errorHandler');
set_exception_handler('core\Error::exceptionHandler');

$core = new Core;
$core->start();