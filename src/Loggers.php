<?php

namespace App;

use Monolog\Handler\StreamHandler;
use Monolog\Level;
use Monolog\Logger;

class Loggers
{
    protected Logger $logger;
    public function __construct(

    ) {
        $this->logger = new Logger('app');
        $this->logger->pushHandler(new StreamHandler(__DIR__ . '/../storage/log/app.log', Level::Debug));
    }
    public function write(string $message): void
    {
        $this->logger->debug($message);

    }
}