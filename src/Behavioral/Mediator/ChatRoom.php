<?php


namespace Pattern\Behavioral\Mediator;

// Mediator
use Carbon\Carbon;

class ChatRoom implements ChatRoomMediator
{
    public function showMessage(User $user, string $message)
    {
        $time = Carbon::now();
        $sender = $user->getName();
        echo $time . '[' . $sender . ']:' . $message."\n";
    }
}