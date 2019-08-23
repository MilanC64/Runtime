<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';

use Webops\Runtime\Runtime;
$runtime = new Runtime();
$runtime->setStartTime(microtime(true));
sleep(1);
$runtime->setEndTime(microtime(true));
$runtime->sec();

echo $runtime->getStartTime();