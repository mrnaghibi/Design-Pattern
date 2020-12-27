<?php


namespace Pattern\Structural\Decorator;

/**
 * Class WhipCoffee
 *
 * @property Coffee $coffee
 * @package Pattern\Structural\Decorator
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
