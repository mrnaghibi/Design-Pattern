<?php


namespace Pattern\Structural\Adapter\Sample1;

/**
 * Class WildDogAdapter
 *
 * @property WildDog $dog
 * @package Pattern\Structural\Adapter\Sample1;
 */
class WildDogAdapter implements Lion
{
    protected WildDog $dog;

    /**
     * WildDogAdapter constructor.
     *
     * @param $dog
     */
    public function __construct(WildDog $dog)
    {
        $this->dog = $dog;
    }

    public function roar()
    {
        $this->dog->bark();
    }
}
