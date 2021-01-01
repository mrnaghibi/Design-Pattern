<?php


namespace Pattern\Behavioral\Mediator\Sample1;

/**
 * Class User
 *
 * @property string           $name
 * @property ChatRoomMediator $chatMediator
 * @package Pattern\Behavioral\Mediator
 */
class User
{
    protected string $name;
    protected ChatRoomMediator $chatMediator;

    public function __construct(
        string $name,
        ChatRoomMediator $chatMediator
    ) {
        $this->name = $name;
        $this->chatMediator = $chatMediator;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function send($message)
    {
        $this->chatMediator->showMessage($this, $message);
    }
}