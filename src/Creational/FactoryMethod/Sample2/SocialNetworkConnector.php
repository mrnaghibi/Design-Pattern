<?php

namespace Pattern\Creational\FactoryMethod\Sample2;

/**
 * EN: The Product interface declares behaviors of various types of products.
 */
interface SocialNetworkConnector
{
    public function logIn(): void;

    public function logOut(): void;

    public function createPost($content): void;
}