<?php

namespace Pattern\Structural\Bridge\Sample2;

/**
 * EN: The Abstraction.
 */
abstract class Page
{
    /**
     * @var Renderer
     */
    protected Renderer $renderer;

    /**
     * EN: The Abstraction is usually initialized with one of the Implementation
     * objects.
     *
     * @param Renderer $renderer
     */
    public function __construct(Renderer $renderer)
    {
        $this->renderer = $renderer;
    }

    /**
     * EN: The Bridge pattern allows replacing the attached Implementation
     * object dynamically.
     *
     * @param Renderer $renderer
     */
    public function changeRenderer(Renderer $renderer): void
    {
        $this->renderer = $renderer;
    }

    /**
     * EN: The "view" behavior stays abstract since it can only be provided by
     * Concrete Abstraction classes.
     */
    abstract public function view(): string;
}