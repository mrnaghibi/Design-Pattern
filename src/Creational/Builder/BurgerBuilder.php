<?php


namespace Pattern\Creational\Builder;

/**
 * Class BurgerBuilder
 *
 * @property int  $size
 * @property bool $cheese
 * @property bool $pepperoni
 * @property bool $lettuce
 * @property bool $tomato
 * @package Pattern\Creational\Builder
 */
class BurgerBuilder
{
    public int $size;
    public bool $cheese = false;
    public bool $pepperoni = false;
    public bool $lettuce = false;
    public bool $tomato = false;

    /**
     * BurgerBuilder constructor.
     *
     * @param $size
     */
    public function __construct($size)
    {
        $this->size = $size;
    }

    public function addPepperoni()
    {
        $this->pepperoni = true;
        return $this;
    }

    public function addCheese()
    {
        $this->cheese = true;
        return $this;
    }

    public function addLettuce()
    {
        $this->lettuce = true;
        return $this;
    }

    public function addTomato()
    {
        $this->tomato = true;
        return $this;
    }

    public function build(): Burger
    {
        return new Burger($this);
    }
}
