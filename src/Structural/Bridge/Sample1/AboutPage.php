<?php


namespace Pattern\Structural\Bridge\Sample1;

/**
 * Class About
 *
 * @property Color $color
 * @package Pattern\Structural\Bridge\Sample1
 */
class AboutPage implements Bridge
{
    protected Color $color;

    /**
     * About constructor.
     *
     * @param Color $color
     */
    public function __construct(Color $color)
    {
        $this->color = $color;
    }

    public function getContent(): string
    {
        return "About Page In " . $this->color->getColor();
    }
}
