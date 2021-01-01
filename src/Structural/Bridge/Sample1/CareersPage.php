<?php


namespace Pattern\Structural\Bridge\Sample1;

/**
 * Class Careers
 *
 * @property Color $color
 * @package Pattern\Structural\Bridge\Sample1
 */
class CareersPage implements Bridge
{
    protected Color $color;

    /**
     * Careers constructor.
     *
     * @param $color
     */
    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    public function getContent(): string
    {
        return "Careers Page In " . $this->color->getColor();
    }
}
