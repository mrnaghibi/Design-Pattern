<?php


namespace Pattern\Structural\Decorator\Sample1;

/**
 * Class WhipCoffee
 *
 * @property Coffee $coffee
 * @package Pattern\Structural\Decorator\Sample1
 */
class WhipCoffee implements Coffee
{
    protected Coffee $coffee;

    /**
     * MilkCoffee constructor.
     *
     * @param $coffee
     */
    public function __construct(Coffee $coffee)
    {
        $this->coffee = $coffee;
    }

    public function getCost(): int
    {
        return $this->coffee->getCost() + 5;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . " ,Whip";
    }
}
