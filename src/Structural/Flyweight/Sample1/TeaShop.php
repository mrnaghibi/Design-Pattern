<?php


namespace Pattern\Structural\Flyweight\Sample1;

/**
 * Class TeaShop
 *
 * @property array    $orders
 * @property TeaMaker $teaMaker
 * @package Pattern\Structural\Flyweight\Sample1
 */
class TeaShop
{
    protected array $orders;
    protected TeaMaker $teaMaker;

    /**
     * TeaShop constructor.
     *
     * @param $teaMaker
     */
    public function __construct(TeaMaker $teaMaker)
    {
        $this->teaMaker = $teaMaker;
    }

    public function takeOrder(string $teaType, int $table)
    {
        $this->orders[$table] = $this->teaMaker->make($teaType);
    }

    public function serve()
    {
        foreach ($this->orders as $table => $tea) {
            echo "Serving tea to table #{$table}, type: {$tea->getType()}\n";
        }
    }
}
