<?php


namespace Pattern\Behavioral\Mediator\Sample2;

/**
 * EN: Mediator Design Pattern
 *
 * Intent: Lets you reduce chaotic dependencies between objects. The pattern
 * restricts direct communications between the objects and forces them to
 * collaborate only via a mediator object.
 *
 * Example: In this example, the Mediator pattern expands the idea of the
 * Observer pattern by providing a centralized event dispatcher. It allows any
 * object to track & trigger events in other objects without depending on their
 * classes.
 *
 */

/**
 * EN: A simple helper function to provide global access to the event
 * dispatcher.
 *
 * RU: Простая вспомогательная функция для предоставления глобального доступа к
 * диспетчеру событий.
 */
function events(): EventDispatcher
{
    static $eventDispatcher;
    if (!$eventDispatcher) {
        $eventDispatcher = new EventDispatcher();
    }

    return $eventDispatcher;
}


class Index
{
    public static function main()
    {
        /**
         * EN: The client code.
         */

        $repository = new UserRepository();
        events()->attach($repository, "facebook:update");

        $logger = new Logger(__DIR__ . "/log.txt");
        events()->attach($logger, "*");

        $onboarding = new OnboardingNotification("1@example.com");
        events()->attach($onboarding, "users:created");

        $repository->initialize(__DIR__ . "users.csv");


        $user = $repository->createUser([
            "name" => "John Smith",
            "email" => "john99@example.com",
        ]);


        $user->delete();
    }
}
