<?php

namespace Pattern\Creational\Singleton\Sample1;

/**
 * Class President
 *
 * @package Pattern\Creational\Singleton\Sample1
 */
final class President
{
    private static President $instance;

    /**
     * President constructor.
     */
    public function __construct()
    {
        //Hide the Constructor
    }

    public static function getInstance(): President
    {
        if (!isset(self::$instance)) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }

    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }
}
