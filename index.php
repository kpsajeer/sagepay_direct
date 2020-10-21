<?php

require_once __DIR__ . '/vendor/autoload.php';

use sajeer\SagepayDirect\Sagepay;

$greeting = new Sagepay();

echo $greeting->greet("Hello Composer");
