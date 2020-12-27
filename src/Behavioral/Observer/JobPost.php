<?php


namespace Pattern\Behavioral\Observer;

/**
 * Class JobPost
 *
 * @property  string $title
 * @package Pattern\Behavioral\Observer
 */
class JobPost
{
    protected string $title;

    public function __construct(string $title)
    {
        $this->title = $title;
    }

    public function getTitle(): string
    {
        return $this->title;
    }
}
