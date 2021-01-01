<?php

namespace Pattern\Behavioral\Mediator\Sample2;

/**
 * EN: The Observer interface defines how components receive the event
 * notifications.
 *
 */
interface Observer
{
    public function update(string $event, object $emitter, $data = null);
}