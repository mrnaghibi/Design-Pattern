<?php

namespace Pattern\Behavioral\Memento\Sample2;

use Carbon\Carbon;

/**
 * EN: The Concrete Memento contains the infrastructure for storing the
 * Originator's state.
 *
 * RU: Конкретный снимок содержит инфраструктуру для хранения состояния
 * Создателя.
 */
class ConcreteMemento implements Memento
{
    private $state;

    private $date;

    public function __construct(string $state)
    {
        $this->state = $state;
        $this->date = Carbon::now();
    }

    /**
     * EN: The Originator uses this method when restoring its state.
     *
     * RU: Создатель использует этот метод, когда восстанавливает своё
     * состояние.
     */
    public function getState(): string
    {
        return $this->state;
    }

    /**
     * EN: The rest of the methods are used by the Caretaker to display
     * metadata.
     *
     * RU: Остальные методы используются Опекуном для отображения метаданных.
     */
    public function getName(): string
    {
        return $this->date . " / (" . substr($this->state, 0, 9) . "...)";
    }

    public function getDate(): string
    {
        return $this->date;
    }
}
