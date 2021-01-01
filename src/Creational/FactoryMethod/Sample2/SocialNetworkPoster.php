<?php

namespace Pattern\Creational\FactoryMethod\Sample2;

/**
 * EN: The Creator declares a factory method that can be used as a substitution
 * for the direct constructor calls of products, for instance:
 *
 * - Before: $p = new FacebookConnector();
 * - After: $p = $this->getSocialNetwork;
 *
 * This allows changing the type of the product being created by
 * SocialNetworkPoster's subclasses.
 */
abstract class SocialNetworkPoster
{
    /**
     * EN: The actual factory method. Note that it returns the abstract
     * connector. This lets subclasses return any concrete connectors without
     * breaking the superclass' contract.
     */
    abstract public function getSocialNetwork(): SocialNetworkConnector;

    /**
     * EN: When the factory method is used inside the Creator's business logic,
     * the subclasses may alter the logic indirectly by returning different
     * types of the connector from the factory method.
     *
     * @param $content
     */
    public function post($content): void
    {
        // EN: Call the factory method to create a Product object...
        //
        $network = $this->getSocialNetwork();
        // EN: ...then use it as you will.
        $network->logIn();
        $network->createPost($content);
        $network->logout();
    }
}