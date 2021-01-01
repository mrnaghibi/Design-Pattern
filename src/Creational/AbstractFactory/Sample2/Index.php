<?php


namespace Pattern\Creational\AbstractFactory\Sample2;

/**
 * EN: Abstract Factory Design Pattern
 *
 * Intent: Lets you produce families of related objects without specifying their
 * concrete classes.
 *
 * Example: In this example, the Abstract Factory pattern provides an
 * infrastructure for creating various types of templates for different elements
 * of a web page.
 *
 * A web application can support different rendering engines at the same time,
 * but only if its classes are independent of the concrete classes of rendering
 * engines. Hence, the application's objects must communicate with template
 * objects only via their abstract interfaces. Your code should not create the
 * template objects directly, but delegate their creation to special factory
 * objects. Finally, your code should not depend on the factory objects either
 * but, instead, should work with them via the abstract factory interface.
 *
 * As a result, you will be able to provide the app with the factory object that
 * corresponds to one of the rendering engines. All templates, created in the
 * app, will be created by that factory and their type will match the type of
 * the factory. If you decide to change the rendering engine, you'll be able to
 * pass a new factory to the client code, without breaking any existing code.
 *
 */
class Index
{
    public static function main()
    {
        /**
         * EN: Now, in other parts of the app, the client code can accept factory
         * objects of any type.
         */
        $page = new Page('Sample page', 'This it the body.');

        echo "Testing actual rendering with the PHPTemplate factory:\n";
        echo $page->render(new PHPTemplateFactory());


        // EN: Uncomment the following if you have Twig installed.

        // echo "Testing rendering with the Twig factory:\n";
        // echo $page->render(new TwigTemplateFactory());
    }
}
