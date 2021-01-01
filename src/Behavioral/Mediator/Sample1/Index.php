<?php


namespace Pattern\Behavioral\Mediator\Sample1;

class Index
{
    public static function main()
    {
        $mediator = new ChatRoom();
        $john = new User('John Doe', $mediator);
        $jane = new User('Jane Doe', $mediator);
        $john->send('Hi there!');
        $jane->send('Hey!');
    }
}