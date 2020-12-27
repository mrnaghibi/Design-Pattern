<?php


namespace Pattern\Structural\Flyweight;

/**
 * Class TeaMaker
 *
 * @property array $availableTea
 * @package Pattern\Structural\Flyweight
 */
class TeaMaker
{
    protected array $availableTea = [];

    public function make(string $preference)
    {
        if (empty($this->availableTea[$preference])) {
            $this->availableTea[$preference] = new Tea($preference);
        }
        return $this->availableTea[$preference];
    }
}
