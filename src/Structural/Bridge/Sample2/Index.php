<?php


namespace Pattern\Structural\Bridge\Sample2;

/**
 * EN: Bridge Design Pattern
 *
 * Intent: Lets you split a large class or a set of closely related classes into
 * two separate hierarchies—abstraction and implementation—which can be
 * developed independently of each other.
 *
 * Example: In this example, the Page hierarchy acts as the Abstraction, and the
 * Renderer hierarchy acts as the Implementation. Objects of the Page class can
 * assemble web pages of a particular kind using basic elements provided by a
 * Renderer object attached to that page. Since both of the class hierarchies
 * are separate, you can add a new Renderer class without changing any of the
 * Page classes and vice versa.
 *
 */


/**
 * EN: The client code usually deals only with the Abstraction objects.
 */
function clientCode(Page $page)
{
    // ...

    echo $page->view();
    // ...
}


class Index
{
    public static function main()
    {
        /**
         * EN: The client code can be executed with any pre-configured combination of
         * the Abstraction+Implementation.
         */
        $HTMLRenderer = new HTMLRenderer();
        $JSONRenderer = new JsonRenderer();

        $page = new SimplePage($HTMLRenderer, "Home", "Welcome to our website!");
        echo "HTML view of a simple content page:\n";
        clientCode($page);
        echo "\n\n";

        /**
         * EN: The Abstraction can change the linked Implementation at runtime if
         * needed.
         */
        $page->changeRenderer($JSONRenderer);
        echo "JSON view of a simple content page, rendered with the same client code:\n";
        clientCode($page);
        echo "\n\n";


        $product = new Product(
            "123",
            "Star Wars, episode1",
            "A long time ago in a galaxy far, far away...",
            "/images/star-wars.jpeg",
            39.95
        );

        $page = new ProductPage($HTMLRenderer, $product);
        echo "HTML view of a product page, same client code:\n";
        clientCode($page);
        echo "\n\n";

        $page->changeRenderer($JSONRenderer);
        echo "JSON view of a simple content page, with the same client code:\n";
        clientCode($page);
    }
}
