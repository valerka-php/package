<?php

namespace Valerjan;

use Valerjan\log\AbstractLogger;

class Logger extends AbstractLogger
{
    private static string $path = '../src/logs/';

    public static function log(
        $level,
        string|\Stringable $message,
        string $line ,
        string $file ,
        string $storage = 'log.txt',
        array $context = []
    ): void

    {
        self::$path .= $storage;
        $data = date('H:m:s ') . ' | ' . $level . ' | '. $file . ' | line : ' . $line . ' | ' . $message . "\r\n";
        file_put_contents(self::$path, $data, FILE_APPEND);

    }
}
