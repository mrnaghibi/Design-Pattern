<?php

namespace Pattern\Behavioral\Command\Sample2;

/**
 * EN: The Command interface declares the main execution method as well as
 * several helper methods for retrieving a command's metadata.
 *
 * RU: Интерфейс Команды объявляет основной метод выполнения, а также несколько
 * вспомогательных методов для получения метаданных команды.
 */
interface Command
{
    public function execute(): void;

    public function getId(): int;

    public function getStatus(): int;
}