<?php

declare(strict_types=1);

require_once realpath("vendor/autoload.php");


$client = new \Patterns\Structural\Proxy\Client();
$client->sayHello();