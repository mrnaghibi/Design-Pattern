<?php


namespace Pattern\Structural\Bridge;

/**
 * Class Careers
 *
 * @property Theme $theme
 * @package Pattern\Structural\Bridge
 */
class Careers implements Bridge
{
    protected Theme $theme;

    /**
     * Careers constructor.
     *
     * @param $theme
     */
    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent(): string
    {
        return "Careers Page In " . $this->theme->getColor();
    }
}
