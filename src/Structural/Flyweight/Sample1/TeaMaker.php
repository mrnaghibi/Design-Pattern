<?php


namespace Pattern\Structural\Flyweight\Sample1;

/**
 * Class TeaMaker
 *
 * @property array $availableTea
 * @package Pattern\Structural\Flyweight\Sample1
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
