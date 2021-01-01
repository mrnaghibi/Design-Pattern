<?php


namespace Pattern\Structural\Proxy\Sample1;

/**
 * Class SecureDoor
 *
 * @property Door $door
 * @package Pattern\Structural\Proxy\Sample1
 */
class SecureDoor
{
    protected Door $door;

    /**
     * SecureDoor constructor.
     *
     * @param $door
     */
    public function __construct(Door $door)
    {
        $this->door = $door;
    }

    public function open($password)
    {
        if ($this->authenticate($password)) {
            $this->door->open();
        } else {
            echo "Big No! It ain't possible!\n";
        }
    }

    public function authenticate($password): bool
    {
        return $password === "password";
    }

    public function close()
    {
        $this->door->close();
    }
}
