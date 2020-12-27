<?php


namespace Tests;

use PHPUnit\Framework\TestCase;
use Pattern\Creational\Builder\Index as BuilderIndex;
use Pattern\Creational\Prototype\Index as PrototypeIndex;
use Pattern\Creational\Singleton\Index as SingletonIndex;
use Pattern\Creational\FactoryMethod\Index as FactoryMethodIndex;
use Pattern\Creational\SimpleFactory\Index as SimpleFactoryIndex;
use Pattern\Creational\AbstractFactory\Index as AbstractFactoryIndex;

class CreationalTest extends TestCase
{
    public function testSimpleFactory()
    {
        SimpleFactoryIndex::main();
        self::expectOutputString(
            <<<EOF
            Width:100
            Height:200
            EOF
        );
    }

    public function testAbstractFactory()
    {
        AbstractFactoryIndex::main();
        self::expectOutputString(
            <<<EOF
            I'm a Wooden Door!
            I can only fit wooden doors!
            I'm an Iron Door!
            I can only fit iron doors!
            
            EOF

        );
    }

    public function testFactoryMethod()
    {
        FactoryMethodIndex::main();
        self::expectOutputString(
            <<<EOF
            Asking About Design Pattern!
            Asking About community building!
            EOF

        );
    }

    public function testBuilder()
    {
        BuilderIndex::main();
        self::expectOutputString(
            <<<EOf
            Size: 5
            Have a pepperoni
            Have a lettuce
            Have a tomato
            EOf
        );
    }

    public function testPrototype()
    {
        PrototypeIndex::main();
        self::expectOutputString(
            <<<EOF
            Jolly
            Mountain Sheep
            Dolly
            Mountain Sheep
            EOF

        );
    }

    public function testSingleton()
    {
        SingletonIndex::main();
        self::expectOutputString(
            <<<EOF
            They Are The Same!
            EOF

        );
    }

}
