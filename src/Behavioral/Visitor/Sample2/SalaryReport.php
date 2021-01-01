<?php


namespace Pattern\Behavioral\Visitor\Sample2;

use NumberFormatter;

/**
 * The Concrete Visitor must provide implementations for every single class of
 * the Concrete Components.
 */
class SalaryReport implements Visitor
{
    private NumberFormatter $moneyFormat;

    public function __construct()
    {
        $this->moneyFormat = new NumberFormatter("en-US", NumberFormatter::CURRENCY);
    }

    public function visitCompany(Company $company): string
    {
        $output = "";
        $total = 0;

        foreach ($company->getDepartments() as $department) {
            $total += $department->getCost();
            $output .= "\n--" . $this->visitDepartment($department);
        }
        $output = $company->getName() .
            " (" . $this->moneyFormat->format($total) . ")\n" . $output;

        return $output;
    }

    public function visitDepartment(Department $department): string
    {
        $output = "";

        foreach ($department->getEmployees() as $employee) {
            $output .= "   " . $this->visitEmployee($employee);
        }

        $output = $department->getName() .
            " (" . $this->moneyFormat->format($department->getCost()) . ")\n\n" .
            $output;

        return $output;
    }

    public function visitEmployee(Employee $employee): string
    {
        return $this->moneyFormat->format($employee->getSalary()) .
            " " . $employee->getName() .
            " (" . $employee->getPosition() . ")\n";
    }
}
