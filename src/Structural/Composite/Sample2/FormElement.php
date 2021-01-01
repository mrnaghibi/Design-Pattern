<?php

namespace Pattern\Structural\Composite\Sample2;

/**
 * EN: The base Component class declares an interface for all concrete
 * components, both simple and complex.
 *
 * In our example, we'll be focusing on the rendering behavior of DOM elements.
 */
abstract class FormElement
{
    /**
     * EN: We can anticipate that all DOM elements require these 3 fields.
     *
     */
    protected string $name;
    protected string $title;
    protected string $data;

    public function __construct(string $name, string $title)
    {
        $this->name = $name;
        $this->title = $title;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setData($data): void
    {
        $this->data = $data;
    }

    public function getData(): string
    {
        return $this->data;
    }

    /**
     * EN: Each concrete DOM element must provide its rendering implementation,
     * but we can safely assume that all of them are returning strings.
     */
    abstract public function render(): string;
}