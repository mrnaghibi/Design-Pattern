<?php

namespace Pattern\Behavioral\Mediator;

interface ChatRoomMediator
{
    public function showMessage(User $user, string $message);
}