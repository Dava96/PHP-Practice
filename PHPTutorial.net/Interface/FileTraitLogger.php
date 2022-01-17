<?php

require "Logger.php";
class FileTraitLogger implements Logger
{
    private $handle;
    private $logfile;

    public function __construct($fileName, $mode = "a") {
        $this->logfile = $fileName;

        $this->handle = fopen($fileName, $mode)
                        or die("Could not open the file log");
    }

    public function log($message) {
        $message = date('F j, Y, g:i a') . ': ' . $message . "\n";
        fwrite($this->handle, $message);
    }

    public function __destruct()
    {
        if ($this->handle) {
            fclose($this->handle);
        }
    }
}

$loggers = [
    new FileTraitLogger("./log.txt"),
    new DatabaseTraitLogger()
];

foreach ($loggers as $logger) {
    $logger->Log("log message");
}