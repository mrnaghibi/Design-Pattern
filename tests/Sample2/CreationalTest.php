<?php


namespace Tests\Sample2;

use Carbon\Carbon;
use PHPUnit\Framework\TestCase;
use Pattern\Creational\Singleton\Sample2\Index as SingletonIndex;
use Pattern\Creational\Prototype\Sample2\Index as PrototypeIndex;
use Pattern\Creational\Builder\Sample2\Index as BuilderIndex;
use Pattern\Creational\AbstractFactory\Sample2\Index as AbstractFactoryIndex;
use Pattern\Creational\FactoryMethod\Sample2\Index as FactoryMethodIndex;

class CreationalTest extends TestCase
{
    public function testFactoryMethod()
    {
        FactoryMethodIndex::main();
        self::expectOutputString(
            <<<EOF
            Testing ConcreteCreator1:
            Send HTTP API request to log in user john_smith with password ******
            Send HTTP API requests to create a post in Facebook timeline.
            Send HTTP API request to log out user john_smith
            Send HTTP API request to log in user john_smith with password ******
            Send HTTP API requests to create a post in Facebook timeline.
            Send HTTP API request to log out user john_smith
            
            
            Testing ConcreteCreator2:
            Send HTTP API request to log in user john_smith@example.com with password ******
            Send HTTP API requests to create a post in LinkedIn timeline.
            Send HTTP API request to log out user john_smith@example.com
            Send HTTP API request to log in user john_smith@example.com with password ******
            Send HTTP API requests to create a post in LinkedIn timeline.
            Send HTTP API request to log out user john_smith@example.com

            EOF
        );
    }

    public function testAbstractFactory()
    {
        AbstractFactoryIndex::main();
        self::expectOutputString(
            <<<EOF
            Testing actual rendering with the PHPTemplate factory:
            <div class="page">
                <h1>Sample page</h1>
                <article class="content">This it the body.</article>
            </div>
            EOF
        );
    }

    public function testBuilder()
    {
        BuilderIndex::main();
        self::expectOutputString(
            <<<EOF
            Testing MySQL query builder:
            SELECT name, email, password FROM users WHERE age > '18' AND age < '30' LIMIT 10, 20;
            
            Testing PostgresSQL query builder:
            SELECT name, email, password FROM users WHERE age > '18' AND age < '30' LIMIT 10 OFFSET 20;
            EOF
        );
    }

    public function testPrototype()
    {
        Carbon::setTestNow(Carbon::createFromTimestampMs(1609446600000));
        PrototypeIndex::main();
        self::expectOutputString(
            <<<EOF
            title: Tip of the day
            body: Keep calm and carry on.
            date: 2020-12-31 20:30:00
            author: John Smith
            title: Copy of Tip of the day
            body: Keep calm and carry on.
            date: 2020-12-31 20:30:00
            author: John Smith

            EOF
        );
    }

    public function testSingleton()
    {
        Carbon::setTestNow(Carbon::createFromTimestampMs(1609446600000));
        SingletonIndex::main();
        self::expectOutputString(
            <<<EOF
            2020-12-31 20:30:00: Started!
            2020-12-31 20:30:00: Logger has a single instance.
            2020-12-31 20:30:00: Config singleton also works fine.
            2020-12-31 20:30:00: Finished!

            EOF
        );
    }
}
