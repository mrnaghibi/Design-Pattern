<?php

namespace Pattern\Behavioral\State\Sample2;

/**
 * EN: The Context defines the interface of interest to clients. It also
 * maintains a reference to an instance of a State subclass, which represents
 * the current state of the Context.
 *
 */
class Context
{
    /**
     * EN: @var State A reference to the current state of the Context.
     *
     */
    private State $state;

    public function __construct(State $state)
    {
        $this->transitionTo($state);
    }

    /**
     * EN: The Context allows changing the State object at runtime.
     *
     * @param State $state
     */
    public function transitionTo(State $state): void
    {
        echo "Context: Transition to " . get_class($state) . ".\n";
        $this->state = $state;
        $this->state->setContext($this);
    }

    /**
     * EN: The Context delegates part of its behavior to the current State
     * object.
     *
     * RU: Контекст делегирует часть своего поведения текущему объекту
     * Состояния.
     */
    public function request1(): void
    {
        $this->state->handle1();
    }

    public function request2(): void
    {
        $this->state->handle2();
    }
}