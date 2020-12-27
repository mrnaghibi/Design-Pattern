<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use Pattern\Structural\Proxy\Index;
use Pattern\Structural\Facade\Index as FacadeIndex;
use Pattern\Structural\Composite\Index as CompositeIndex;
use Pattern\Structural\Bridge\Index as BridgeIndex;
use Pattern\Structural\Adapter\Index as AdapterIndex;
use Pattern\Structural\Decorator\Index as DecoratorIndex;
use Pattern\Structural\Flyweight\Index as FlyweightIndex;

class StructuralTest extends TestCase
{
    public function testAdapter()
    {
        AdapterIndex::main();
        self::expectOutputString(
            <<<EOF
            Bark Dog
            EOF
        );
    }

    public function testBridge()
    {
        BridgeIndex::main();
        self::expectOutputString(
            <<<EOF
            About Page In Dark Black
            Careers Page In Dark Black
            EOF
        );
    }

    public function testComposite()
    {
        CompositeIndex::main();
        self::expectOutputString(
            <<<EOF
            Net Salaries: 27000
            EOF
        );
    }

    public function testDecorator()
    {
        DecoratorIndex::main();
        self::expectOutputString(
            <<<EOF
            10 Simple Coffee
            12 Simple Coffee ,Milk
            17 Simple Coffee ,Milk ,Whip
            20 Simple Coffee ,Milk ,Whip ,Vanilla
            EOF
        );
    }

    public function testFacade()
    {
        FacadeIndex::main();
        self::expectOutputString(
            <<<EOF
            Ouch!
            Beep Beep!
            Loading...
            Ready to be used!
            Bup bup bup buzzz!
            Haaah
            Zzzz!
            
            EOF
        );
    }

    public function testFlyweight()
    {
        FlyweightIndex::main();
        self::expectOutputString(
            <<<EOF
            Serving tea to table #1, type: less sugar
            Serving tea to table #2, type: more milk
            Serving tea to table #5, type: without sugar
            
            EOF
        );
    }

    public function testProxy()
    {
        Index::main();
        self::expectOutputString(
            <<<EOF
            Big No! It ain't possible!
            Opening Lab Door!
            Closing Lab Door!
            
            EOF

        );
    }

}
