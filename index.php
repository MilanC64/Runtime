<?php

require_once __DIR__ . '/vendor/autoload.php';

use Webops\Runtime\Runtime;
use Webops\Runtime\SayHello;

$runtime = new Runtime();

// Class example:
// $runtime->setClass('Webops\Runtime\SayHello');
// $runtime->setMethod('saySomethingALot');
// $runtime->setArgs([1000, "Some really long and boaring sentence about the meaning of lifle and it's twists and turns.............."]);
// echo $runtime->classMethodSec();

// Object example:
// $runtime->setObject(new SayHello);
// $runtime->setMethod('sayHello');
// echo $runtime->objMethodSec();
