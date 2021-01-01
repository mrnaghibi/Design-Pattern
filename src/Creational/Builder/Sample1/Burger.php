<?php


namespace Pattern\Creational\Builder\Sample1;

/**
 * Class Burger
 *
 * @property int $size
 * @property bool $cheese
 * @property bool $pepperoni
 * @property bool $lettuce
 * @property bool $tomato
 * @package Pattern\Creational\Builder\Sample1
 */
class Burger
{
    protected int $size;
    protected bool $cheese = false;
    protected bool $pepperoni = false;
    protected bool $lettuce = false;
    protected bool $tomato = false;

    /**
     * Burger constructor.
     *
     * @param BurgerBuilder $builder
     */
    public function __construct(BurgerBuilder $builder)
    {
        $this->size = $builder->size;
        $this->cheese = $builder->cheese;
        $this->pepperoni = $builder->pepperoni;
        $this->lettuce = $builder->lettuce;
        $this->tomato = $builder->tomato;
    }
    public function __toString(): string
    {
        $result = "Size: {$this->size}\n";
        $result .= $this->cheese ? "Have a Cheese\n" : '';
        $result .= $this->pepperoni ? "Have a pepperoni\n" : '';
        $result .= $this->lettuce ? "Have a lettuce\n" : '';
        $result .= $this->tomato ? "Have a tomato" : '';
        return $result;
    }
}
