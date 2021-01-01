<?php

namespace Pattern\Behavioral\Mediator\Sample1;

interface ChatRoomMediator
{
    public function showMessage(User $user, string $message);
}