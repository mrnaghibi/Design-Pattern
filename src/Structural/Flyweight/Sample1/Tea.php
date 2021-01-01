<?php


namespace Pattern\Structural\Flyweight\Sample1;

/**
 * Class KarakTea
 *
 * @property string $type
 * @package Pattern\Structural\Flyweight\Sample1
 */
class Tea
{
    private string $type;

    public function __construct(string $type)
    {
        $this->type = $type;
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
}
