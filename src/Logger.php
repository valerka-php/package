<?php

namespace Valerjan;

use Psr\Log\AbstractLogger;

class Logger extends AbstractLogger
{
    public string $path = '';

    public function __construct($path){
        $this->path = $path;
    }

    public function log($level, string|\Stringable $message, array $context = []): void
    {
        $data = date('H:m:s ') . 'Logger.php/' . $level . '/' . $message  . "\r";
        file_put_contents($this->path, $data, FILE_APPEND);
    }
}
