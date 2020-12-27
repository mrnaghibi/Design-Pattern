<?php


namespace Pattern\Behavioral\Memento;

/**
 * Class EditorMemento
 *
 * @property string $content
 * @package Pattern\Behavioral\Memento
 */
class EditorMemento
{
    protected string $content;

    public function __construct(string $content)
    {
        $this->content = $content;
    }

    public function getContent(): string
    {
        return $this->content;
    }
}
