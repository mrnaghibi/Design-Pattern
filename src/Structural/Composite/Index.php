<?php

namespace Pattern\Structural\Composite;

class Index
{
    public static function main()
    {
        $john = new Developer('John Doe', 12000);
        $jane = new Designer('Jane Doe', 15000);

        $organization = new Organization();
        $organization->addEmployee($john);
        $organization->addEmployee($jane);
        echo "Net Salaries: " . $organization->getNetSalaries();
    }
}