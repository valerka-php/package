<?php

ini_set('display_errors', 1);
error_reporting(E_ALL) ;


require_once '../vendor/autoload.php';

use Valerjan\Logger;
use Psr\Log\LogLevel;

$loger = new Logger('../src/log.txt');
$loger->log(LogLevel::NOTICE,'Test log');