<?php

namespace Pattern\Creational\AbstractFactory\Sample2;

/**
 * EN: This is another Abstract Product type, which describes whole page
 * templates.
 */
interface PageTemplate
{
    public function getTemplateString(): string;
}