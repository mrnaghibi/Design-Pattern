<?php


namespace Pattern\Structural\Composite;

/**
 * Class Designer
 *
 * @property float  $salary
 * @property string $name
 * @property array  $roles
 * @package Pattern\Structural\Composite
 */
class Designer implements Employee
{

    protected float $salary;
    protected string $name;
    protected array $roles;

    public function __construct(string $name, float $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSalary(): float
    {
        return $this->salary;
    }

    public function setSalary(float $salary)
    {
        $this->salary = $salary;
    }

    public function getRoles(): array
    {
        return $this->roles;
    }
}
