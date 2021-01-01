<?php


namespace Pattern\Structural\Composite\Sample1;

/**
 * Class Organization
 * @property array $employees
 * @package Pattern\Structural\Composite\Sample1
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
