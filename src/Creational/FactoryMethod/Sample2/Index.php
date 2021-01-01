<?php


namespace Pattern\Creational\FactoryMethod\Sample2;

/**
 * EN: Factory Method Design Pattern
 *
 * Intent: Provides an interface for creating objects in a superclass, but
 * allows subclasses to alter the type of objects that will be created.
 *
 * Example: In this example, the Factory Method pattern provides an interface
 * for creating social network connectors, which can be used to log in to the
 * network, create posts and potentially perform other activities—and all of
 * this without coupling the client code to specific classes of the particular
 * social network.
 */

/**
 * EN: The client code can work with any subclass of SocialNetworkPoster since
 * it doesn't depend on concrete classes.
 *
 * @param SocialNetworkPoster $creator
 */
function clientCode(SocialNetworkPoster $creator)
{
    // ...
    $creator->post("Hello world!");
    $creator->post("I had a large hamburger this morning!");
    // ...
}

class Index
{
    public static function main()
    {
        /**
         * EN: During the initialization phase, the app can decide which social network
         * it wants to work with, create an object of the proper subclass, and pass it
         * to the client code.
         */
        echo "Testing ConcreteCreator1:\n";
        clientCode(new FacebookPoster("john_smith", "******"));
        echo "\n\n";

        echo "Testing ConcreteCreator2:\n";
        clientCode(new LinkedInPoster("john_smith@example.com", "******"));
    }
}
