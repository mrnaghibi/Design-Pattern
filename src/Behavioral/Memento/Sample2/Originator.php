<?php

namespace Pattern\Behavioral\Memento\Sample2;

/**
 * EN: The Originator holds some important state that may change over time. It
 * also defines a method for saving the state inside a memento and another
 * method for restoring the state from it.
 *
 */
class Originator
{
    /**
     * EN: @var string For the sake of simplicity, the originator's state is
     * stored inside a single variable.
     *
     */
    private string $state;
    private RandomGenerator $randomGenerator;

    public function __construct(string $state, RandomGenerator $randomGenerator)
    {
        $this->state = $state;
        echo "Originator: My initial state is: {$this->state}\n";
        $this->randomGenerator = $randomGenerator;
    }

    /**
     * EN: The Originator's business logic may affect its internal state.
     * Therefore, the client should backup the state before launching methods of
     * the business logic via the save() method.
     *
     */
    public function doSomething(): void
    {
        echo "Originator: I'm doing something important.\n";
        $this->state = $this->generateRandomString(30);
        echo "Originator: and my state has changed to: {$this->state}\n";
    }

    private function generateRandomString(int $length = 10): string
    {
        return $this->randomGenerator->generateRandomString($length);
    }

    /**
     * EN: Saves the current state inside a memento.
     *
     */
    public function save(): Memento
    {
        return new ConcreteMemento($this->state);
    }

    /**
     * EN: Restores the Originator's state from a memento object.
     *
     */
    public function restore(Memento $memento): void
    {
        $this->state = $memento->getState();
        echo "Originator: My state has changed to: {$this->state}\n";
    }
}
