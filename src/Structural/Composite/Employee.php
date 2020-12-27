<?php


namespace Pattern\Structural\Composite;

interface Employee
{
    public function __construct(string $name, float $salary);

    public function getName(): string;

    public function getSalary(): float;

    public function setSalary(float $salary);

    public function getRoles(): array;
}
