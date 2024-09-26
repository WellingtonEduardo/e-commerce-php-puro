<?php

declare(strict_types=1);
require __DIR__. '/../vendor/autoload.php';

use App\Loggers;

(new Loggers())->write('teste de erro');