<?php

namespace Pattern\Creational\Prototype\Sample2;

/**
 * EN: Prototype Design Pattern
 *
 * Intent: Lets you copy existing objects without making your code dependent on
 * their classes.
 *
 * Example: The Prototype pattern provides a convenient way to replicate
 * existing objects instead of reconstructing them and copying over all of their
 * fields directly. The direct approach not only couples you to the classes of
 * the objects being cloned, but also doesn't allow you to copy the contents of
 * the private fields. The Prototype pattern lets you perform the cloning within
 * the context of the cloned class, where the access to the class' private
 * fields is not restricted.
 *
 * This example shows you how to clone a complex Page object using the Prototype
 * pattern. The Page class has lots of private fields, which will be carried
 * over to the cloned object thanks to the Prototype pattern.
 */
class Author
{
    private string $name;

    /**
     * @var Page[]
     */
    private array $pages = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function addToPage(Page $page): void
    {
        $this->pages[] = $page;
    }

    public function __toString(): string
    {
        return $this->name."\n";
    }
}
