<?php


namespace Tests\Sample2;

use Carbon\Carbon;
use PHPUnit\Framework\TestCase;
use Pattern\Behavioral\Memento\Sample2\Originator;
use Pattern\Behavioral\Memento\Sample2\RandomGenerator;
use Pattern\Behavioral\State\Sample2\Index as StateIndex;
use Pattern\Behavioral\Command\Sample2\Index as CommandIndex;
use Pattern\Behavioral\Memento\Sample2\Index as MementoIndex;
use Pattern\Behavioral\Visitor\Sample2\Index as VisitorIndex;
use Pattern\Behavioral\Iterator\Sample2\Index as IteratorIndex;
use Pattern\Behavioral\Observer\Sample2\Index as ObserverIndex;
use Pattern\Behavioral\Strategy\Sample2\Index as StrategyIndex;
use Pattern\Behavioral\Mediator\Sample2\Index as MediatorIndex;
use Pattern\Behavioral\TemplateMethod\Sample2\Index as TemplateMethodIndex;
use Pattern\Behavioral\ChainOfResponsibility\Sample2\Index as ChainOfResponsibilityIndex;

class BehavioralTest extends TestCase
{
    public function testVisitor()
    {
        VisitorIndex::main();
        self::expectOutputString(
            <<<EOF
            Client: I can print a report for a whole company:
            
            SuperStarDevelopment ($550,000.00)
            
            --Mobile Development ($351,000.00)
            
               $100,000.00 Albert Falmore (designer)
               $100,000.00 Ali Halabay (programmer)
               $90,000.00 Sarah Konor (programmer)
               $31,000.00 Monica Ronaldino (QA engineer)
               $30,000.00 James Smith (QA engineer)
            
            --Tech Support ($199,000.00)
            
               $70,000.00 Larry Ulbrecht (supervisor)
               $30,000.00 Elton Pale (operator)
               $30,000.00 Rajeet Kumar (operator)
               $34,000.00 John Burnovsky (operator)
               $35,000.00 Sergey Korolev (operator)
            
            Client: ...or just for a single department:
            
            Tech Support ($199,000.00)
            
               $70,000.00 Larry Ulbrecht (supervisor)
               $30,000.00 Elton Pale (operator)
               $30,000.00 Rajeet Kumar (operator)
               $34,000.00 John Burnovsky (operator)
               $35,000.00 Sergey Korolev (operator)

            EOF
        );
    }

    public function testTemplateMethod()
    {
        TemplateMethodIndex::main();
        self::expectOutputString(
            <<<EOF
            
            Checking user's credentials...
            Name: username
            Password: ********
            
            
            Facebook: 'username' has logged in successfully.
            Facebook: 'username' has posted 'message'.
            Facebook: 'username' has been logged out.
            
            EOF
        );
    }

    public function testStrategy()
    {
        StrategyIndex::main();
        self::expectOutputString(
            <<<EOF
            Client: Let's create some orders
            Controller: POST request to /orders with {"email":"me@example.com","product":"ABC Cat food (XL)","total":9.95}
            Controller: Created the order #0.
            Controller: POST request to /orders with {"email":"me@example.com","product":"XYZ Cat litter (XXL)","total":19.95}
            Controller: Created the order #1.
            
            Client: List my orders, please
            Controller: GET request to /orders
            Controller: Here's all orders:
            {
                "id": 0,
                "status": "new",
                "email": "me@example.com",
                "product": "ABC Cat food (XL)",
                "total": 9.95
            }
            {
                "id": 1,
                "status": "new",
                "email": "me@example.com",
                "product": "XYZ Cat litter (XXL)",
                "total": 19.95
            }
            
            Client: I'd like to pay for the second, show me the payment form
            Controller: GET request to /order/1/payment/paypal
            Controller: here's the payment form:
            <form action="https://paypal.com/payment" method="POST">
                <input type="hidden" id="email" value="me@example.com">
                <input type="hidden" id="total" value="19.95">
                <input type="hidden" id="returnURL" value="https://our-website.com/order/1/payment/paypal/return">
                <input type="submit" value="Pay on PayPal">
            </form>
            
            Client: ...pushes the Pay button...
            
            Client: Oh, I'm redirected to the PayPal.
            
            Client: ...pays on the PayPal...
            
            Client: Alright, I'm back with you, guys.
            Controller: GET request to /order/1/payment/paypal/return?key=c55a3964833a4b0fa4469ea94a057152&success=true&total=19.95
            PayPalPayment: ...validating... Done!
            Controller: Thanks for your order!
            Order: #1 is now completed.
            EOF
        );
    }

    public function testState()
    {
        StateIndex::main();
        self::expectOutputString(
            <<<EOF
            Context: Transition to Pattern\Behavioral\State\Sample2\ConcreteStateA.
            ConcreteStateA handles request1.
            ConcreteStateA wants to change the state of the context.
            Context: Transition to Pattern\Behavioral\State\Sample2\ConcreteStateB.
            ConcreteStateB handles request2.
            ConcreteStateB wants to change the state of the context.
            Context: Transition to Pattern\Behavioral\State\Sample2\ConcreteStateA.

            EOF
        );
    }

    public function testObserver()
    {
        ObserverIndex::main();
        self::expectOutputString(
            <<<EOF
            UserRepository: Loading user records from a file.
            UserRepository: Broadcasting the 'users:init' event.
            Logger: I've written 'users:init' entry to the log.
            UserRepository: Creating a user.
            UserRepository: Broadcasting the 'users:created' event.
            OnboardingNotification: The notification has been emailed!
            Logger: I've written 'users:created' entry to the log.
            UserRepository: Deleting a user.
            UserRepository: Broadcasting the 'users:deleted' event.
            Logger: I've written 'users:deleted' entry to the log.

            EOF
        );
    }

    public function testMemento()
    {
        Carbon::setTestNow(Carbon::createFromTimestampMs(1609446600000));
        $mock = \Mockery::mock(RandomGenerator::class);
        $mock->shouldReceive('generateRandomString')
            ->with(30)
            ->andReturn(
                "HkSIKWpTDNaybEoPvFQRVixXlChfZt",
                "LSFlOwHoIqWpuyDfQJXBRjcaGeTCtV",
                "yPJgrUwfEVnakMTNmeKuBYZqOdhsIC",
            );
        $originator = new Originator("Super-duper-super-puper-super.", $mock);

        MementoIndex::main($originator);
        self::expectOutputString(
            <<<EOF
            Originator: My initial state is: Super-duper-super-puper-super.
            
            Caretaker: Saving Originator's state...
            Originator: I'm doing something important.
            Originator: and my state has changed to: HkSIKWpTDNaybEoPvFQRVixXlChfZt
            
            Caretaker: Saving Originator's state...
            Originator: I'm doing something important.
            Originator: and my state has changed to: LSFlOwHoIqWpuyDfQJXBRjcaGeTCtV
            
            Caretaker: Saving Originator's state...
            Originator: I'm doing something important.
            Originator: and my state has changed to: yPJgrUwfEVnakMTNmeKuBYZqOdhsIC
            
            Caretaker: Here's the list of mementos:
            2020-12-31 20:30:00 / (Super-dup...)
            2020-12-31 20:30:00 / (HkSIKWpTD...)
            2020-12-31 20:30:00 / (LSFlOwHoI...)
            
            Client: Now, let's rollback!
            
            Caretaker: Restoring state to: 2020-12-31 20:30:00 / (LSFlOwHoI...)
            Originator: My state has changed to: LSFlOwHoIqWpuyDfQJXBRjcaGeTCtV
            
            Client: Once more!
            
            Caretaker: Restoring state to: 2020-12-31 20:30:00 / (HkSIKWpTD...)
            Originator: My state has changed to: HkSIKWpTDNaybEoPvFQRVixXlChfZt

            EOF
        );
    }

    public function testMediator()
    {
        MediatorIndex::main();
        self::expectOutputString(
            <<<EOF
            UserRepository: Loading user records from a file.
            EventDispatcher: Broadcasting the 'users:init' event.
            Logger: I've written 'users:init' entry to the log.
            UserRepository: Creating a user.
            EventDispatcher: Broadcasting the 'users:created' event.
            OnboardingNotification: The notification has been emailed!
            Logger: I've written 'users:created' entry to the log.
            User: I can now delete myself without worrying about the repository.
            EventDispatcher: Broadcasting the 'users:deleted' event.
            UserRepository: Deleting a user.
            Logger: I've written 'users:deleted' entry to the log.

            EOF
        );
    }

    public function testIterator()
    {
        IteratorIndex::main();
        self::expectOutputString(
            <<<EOF
            Array
            (
                [0] => Name
                [1] => Age
                [2] => Owner
                [3] => Breed
                [4] => Image
                [5] => Color
                [6] => Texture
                [7] => Fur
                [8] => Size
            )
            Array
            (
                [0] => Steve
                [1] => 3
                [2] => Alexander Shvets
                [3] => Bengal
                [4] => /cats/bengal.jpg
                [5] => Brown
                [6] => Stripes
                [7] => Short
                [8] => Medium
            )
            Array
            (
                [0] => Siri
                [1] => 2
                [2] => Alexander Shvets
                [3] => Domestic short-haired
                [4] => /cats/domestic-sh.jpg
                [5] => Black
                [6] => Solid
                [7] => Medium
                [8] => Medium
            )
            Array
            (
                [0] => Fluffy
                [1] => 5
                [2] => John Smith
                [3] => Maine Coon
                [4] => /cats/Maine-Coon.jpg
                [5] => Gray
                [6] => Stripes
                [7] => Long
                [8] => Large
            )

            EOF
        );
    }

    public function testCommand()
    {
        CommandIndex::main();
        self::expectOutputString(
            <<<EOF
            WebScrapingCommand: Downloaded https://www.imdb.com/feature/genre/
            IMDBGenresScrapingCommand: Discovered 0 genres.
            
            EOF
        );
    }

    public function testChainOfResponsibility()
    {
        ChainOfResponsibilityIndex::main();
        self::expectOutputString(
            <<<EOF
            
            Enter your email:
            Enter your password:
            RoleCheckMiddleware: Hello, admin!
            Server: Authorization has been successful!
            
            EOF
        );
    }
}
