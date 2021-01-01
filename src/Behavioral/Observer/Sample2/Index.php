<?php


namespace Pattern\Behavioral\Observer\Sample2;

/**
 * EN: Observer Design Pattern
 *
 * Intent: Lets you define a subscription mechanism to notify multiple objects
 * about any events that happen to the object they're observing.
 *
 * Example: In this example the Observer pattern allows various objects to
 * observe events that are happening inside a user repository of an app.
 *
 * The repository emits various types of events and allows observers to listen
 * to all of them, as well as only individual ones.
 *
 */
class Index
{
    public static function main()
    {
        /**
         * EN: The client code.
         */
        $repository = new UserRepository();
        $repository->attach(new Logger(__DIR__ . "/log.txt"), "*");
        $repository->attach(new OnboardingNotification("1@example.com"), "users:created");

        $repository->initialize(__DIR__ . "/users.csv");

        $user = $repository->createUser([
            "name" => "John Smith",
            "email" => "john99@example.com",
        ]);

        $repository->deleteUser($user);
    }
}
