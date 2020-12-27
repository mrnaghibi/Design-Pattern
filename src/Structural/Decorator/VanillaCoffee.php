<?php


namespace Pattern\Structural\Decorator;

/**
 * Class VanillaCoffee
 *
 * @property Coffee $coffee
 * @package Pattern\Structural\Decorator
 */
class VanillaCoffee implements Coffee
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
        return $this->coffee->getCost() + 3;
    }

    public function getDescription(): string
    {
        return $this->coffee->getDescription() . " ,Vanilla";
    }
}
