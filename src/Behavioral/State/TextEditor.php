<?php


namespace Pattern\Behavioral\State;

/**
 * Class TextEditor
 *
 * @property WritingState $state
 * @package Pattern\Behavioral\State
 */
class TextEditor
{
    protected WritingState $state;

    public function __construct(WritingState $state)
    {
        $this->state = $state;
    }

    public function setState(WritingState $state)
    {
        $this->state = $state;
    }

    public function type(string $words)
    {
        $this->state->write($words);
    }
}
