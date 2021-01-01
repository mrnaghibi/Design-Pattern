<?php

namespace Pattern\Structural\Decorator\Sample2;

/**
 * EN: The base Decorator class doesn't contain any real filtering or formatting
 * logic. Its main purpose is to implement the basic decoration infrastructure:
 * a field for storing a wrapped component or another decorator and the basic
 * formatting method that delegates the work to the wrapped object. The real
 * formatting job is done by subclasses.
 */
class TextFormat implements InputFormat
{
    /**
     * @var InputFormat
     */
    protected InputFormat $inputFormat;

    public function __construct(InputFormat $inputFormat)
    {
        $this->inputFormat = $inputFormat;
    }

    /**
     * EN: Decorator delegates all work to a wrapped component.
     *
     * @param string $text
     *
     * @return string
     */
    public function formatText(string $text): string
    {
        return $this->inputFormat->formatText($text);
    }
}