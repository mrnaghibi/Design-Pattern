<?php


namespace Pattern\Behavioral\Memento;

/**
 * Class Editor
 *
 * @property string $content
 * @package Pattern\Behavioral\Memento
 */
class Editor
{
    protected string $content = '';

    public function type(string $words)
    {
        $this->content = $this->content . ' ' . $words;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function save(): EditorMemento
    {
        return new EditorMemento($this->content);
    }

    public function restore(EditorMemento $memento)
    {
        $this->content = $memento->getContent();
    }
}
