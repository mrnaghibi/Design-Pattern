<?php

namespace Pattern\Creational\Singleton\Sample2;

use Carbon\Carbon;

/**
 * EN: The logging class is the most known and praised use of the Singleton
 * pattern. In most cases, you need a single logging object that writes to a
 * single log file (control over shared resource). You also need a convenient
 * way to access that instance from any context of your app (global access
 * point).
 */
class Logger extends Singleton
{
    /**
     * EN: A file pointer resource of the log file.
     */
    private $fileHandle;

    /**
     * EN: Since the Singleton's constructor is called only once, just a single
     * file resource is opened at all times.
     *
     * Note, for the sake of simplicity, we open the console stream instead of
     * the actual file here.
     */
    protected function __construct()
    {
        parent::__construct();
        $this->fileHandle = fopen('php://stdout', 'w');
    }

    /**
     * EN: Write a log entry to the opened file resource.
     *
     * @param string $message
     */
    public function writeLog(string $message): void
    {
        $date = Carbon::now();
        fwrite($this->fileHandle, "$date: $message\n");
        echo "$date: $message\n";
    }

    /**
     * EN: Just a handy shortcut to reduce the amount of code needed to log
     * messages from the client code.
     *
     * @param string $message
     */
    public static function log(string $message): void
    {
        $logger = static::getInstance();
        $logger->writeLog($message);
    }
}