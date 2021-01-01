<?php


namespace Tests\Sample1;

use Carbon\Carbon;
use PHPUnit\Framework\TestCase;
use Pattern\Behavioral\TemplateMethod\Sample1\Index as TemplateMethodIndex;
use Pattern\Behavioral\State\Sample1\Index as StateIndex;
use Pattern\Behavioral\Strategy\Sample1\Index as StrategyIndex;
use Pattern\Behavioral\Visitor\Sample1\Index as VisitorIndex;
use Pattern\Behavioral\Observer\Sample1\Index as ObserverIndex;
use Pattern\Behavioral\Memento\Sample1\Index as MementoIndex;
use Pattern\Behavioral\Mediator\Sample1\Index as MediatorIndex;
use Pattern\Behavioral\Command\Sample1\Index as CommandIndex;
use Pattern\Behavioral\Iterator\Sample1\Index as IteratorIndex;
use Pattern\Behavioral\ChainOfResponsibility\Sample1\Index as ChainOfResponsibilityIndex;

class BehavioralTest extends TestCase
{
    public function testChainOfResponsibility()
    {
        ChainOfResponsibilityIndex::main();
        self::expectOutputString(
            <<<EOF
            Cannot pay using Bank. Proceeding ..\r
            Cannot pay using Paypal. Proceeding ..\r
            Paid 259 using Bitcoin\r

            EOF
        );
    }

    public function testCommand()
    {
        CommandIndex::main();
        self::expectOutputString(
            <<<EOF
            Bulb has been litDarkness!
            EOF
        );
    }

    public function testIterator()
    {
        IteratorIndex::main();
        self::expectOutputString(
            <<<EOF
            89\r
            101\r
            102\r
            103.2\r
            
            EOF
        );
    }

    public function testMediator()
    {
        Carbon::setTestNow(Carbon::createFromTimestampMs(1609446600000));
        MediatorIndex::main();
        self::expectOutputString(
            <<<EOF
            2020-12-31 20:30:00[John Doe]:Hi there!
            2020-12-31 20:30:00[Jane Doe]:Hey!
            
            EOF
        );
    }

    public function testMemento()
    {
        MementoIndex::main();
        self::expectOutputString(
            <<<EOF
             This is the first sentence. This is second. And this is third.
             This is the first sentence. This is second.
            EOF
        );
    }

    public function testObserver()
    {
        ObserverIndex::main();
        self::expectOutputString(
            <<<EOF
            Hi John Doe! New job posted: Software EngineerHi Sara Doe! New job posted: Software Engineer
            EOF
        );
    }

    public function testVisitor()
    {
        VisitorIndex::main();
        self::expectOutputString(
            <<<EOF
            Ooh oo aa aa!
            Roaaar!
            Tuut tuttu tuutt!
            \r
            Ooh oo aa aa!
            Jumped 20 feet high! on to the tree!
            Roaaar!
            Jumped 7 feet! Back on the ground!
            Tuut tuttu tuutt!
            Walked on water a little and disappeared!
            
            EOF
        );
    }

    public function testStrategy()
    {
        StrategyIndex::main();
        self::expectOutputString(
            <<<EOF
            Sorting using bubble sortSorting using quick sort
            EOF
        );
    }

    public function testState()
    {
        StateIndex::main();
        self::expectOutputString(
            <<<EOF
            First line
            SECOND LINE
            THIRD LINE
            fourth line
            fifth line
            
            EOF
        );
    }

    public function testTemplateMethod()
    {
        TemplateMethodIndex::main();
        self::expectOutputString(
            <<<EOF
            Running android tests
            Linting the android code
            Assembling the android build
            Deploying android build to server
            Running ios tests
            Linting the ios code
            Assembling the ios build
            Deploying ios build to server
            
            EOF

        );
    }
}
