<?php

require 'vendor/autoload.php';
date_default_timezone_set('Europe/Athens');

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');  //Because of the use statement, Logger is equal to Monolog\Logger
$log->pushHandler(new StreamHandler('app.txt', Logger::WARNING));

$log->addWarning('Oh No!');

echo "Hello World";

?>