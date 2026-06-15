<?php

declare(strict_types=1);

use App\Greeter;

require __DIR__ . '/../vendor/autoload.php';

$greeting = (new Greeter())->greet('World');

echo $greeting;
