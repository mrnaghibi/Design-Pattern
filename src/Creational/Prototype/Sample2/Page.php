<?php

namespace Pattern\Creational\Prototype\Sample2;

use Carbon\Carbon;

/**
 * EN: Prototype.
 */
class Page
{
    private string $title;

    private string $body;

    /**
     * @var Author
     */
    private Author $author;

    private array $comments = [];

    /**
     * @var Carbon
     */
    private Carbon $date;

    // EN: +100 private fields.

    public function __construct(string $title, string $body, Author $author)
    {
        $this->title = $title;
        $this->body = $body;
        $this->author = $author;
        $this->author->addToPage($this);
        $this->date = Carbon::now();
    }

    public function addComment(string $comment): void
    {
        $this->comments[] = $comment;
    }

    /**
     * EN: You can control what data you want to carry over to the cloned
     * object.
     *
     * For instance, when a page is cloned:
     * - It gets a new "Copy of ..." title.
     * - The author of the page remains the same. Therefore we leave the
     * reference to the existing object while adding the cloned page to the list
     * of the author's pages.
     * - We don't carry over the comments from the old page.
     * - We also attach a new date object to the page.
     */
    public function __clone()
    {
        $this->title = "Copy of " . $this->title;
        $this->author->addToPage($this);
        $this->comments = [];
        $this->date = Carbon::now();
    }

    public function __toString(): string
    {
        return "title: $this->title\nbody: $this->body\ndate: $this->date\nauthor: $this->author";
    }
}
