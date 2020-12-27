<?php


namespace Pattern\Structural\Composite;

/**
 * Class Organization
 * @property array $employees
 * @package Pattern\Structural\Composite
 */
class Organization
{
    protected array $employees;

    public function addEmployee(Employee $employee)
    {
        $this->employees[] = $employee;
    }

    public function getNetSalaries():float
    {
        $netSalary = 0;
        foreach ($this->employees as $employee) {
            $netSalary+=$employee->getSalary();
        }
        return $netSalary;
    }
}
