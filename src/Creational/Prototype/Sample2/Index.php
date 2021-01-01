<?php


namespace Pattern\Creational\Prototype\Sample2;

/**
 * EN: The client code.
 */
function clientCode()
{
    $author = new Author("John Smith");
    $page = new Page("Tip of the day", "Keep calm and carry on.", $author);

    // ...

    $page->addComment("Nice tip, thanks!");

    // ...

    $draft = clone $page;

    echo $page;
    echo $draft;
}


class Index
{
    public static function main()
    {
        clientCode();
    }
}
