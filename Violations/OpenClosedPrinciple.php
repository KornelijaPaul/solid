<?php

declare(strict_types=1);

class Developer
{
    public function getSalary(): float
    {
        return 1100;
    }
}

class Tester
{
    public function getSalary(): float
    {
        return 1000;
    }
}

class BonusCalculator
{
    private array $employees;

    public function __construct(array $employees)
    {
        $this->employees = $employees;
    }

    public function getTotal(): int
    {
        $bonus = [];

        foreach ($this->employees as $employee) {
            if ($employee instanceof Developer) {
                $bonus[] = $employee->getSalary() * 0.15;
            } elseif ($employee instanceof Tester)
                $bonus[] = $employee->getSalary() * 0.14;
        }

        return array_sum($bonus);
    }
}
