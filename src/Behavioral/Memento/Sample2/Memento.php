<?php

namespace Pattern\Behavioral\Memento\Sample2;

/**
 * EN: The Memento interface provides a way to retrieve the memento's metadata,
 * such as creation date or name. However, it doesn't expose the Originator's
 * state.
 *
 * RU: Интерфейс Снимка предоставляет способ извлечения метаданных снимка, таких
 * как дата создания или название. Однако он не раскрывает состояние Создателя.
 */
interface Memento
{
    public function getName(): string;

    public function getDate(): string;
}