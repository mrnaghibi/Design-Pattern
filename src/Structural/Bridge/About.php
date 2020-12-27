<?php


namespace Pattern\Structural\Bridge;

/**
 * Class About
 *
 * @property Theme $theme
 * @package Pattern\Structural\Bridge
 */
class About implements Bridge
{
    protected Theme $theme;

    /**
     * About constructor.
     *
     * @param Theme $theme
     */
    public function __construct(Theme $theme)
    {
        $this->theme = $theme;
    }

    public function getContent(): string
    {
        return "About Page In " . $this->theme->getColor();
    }
}
