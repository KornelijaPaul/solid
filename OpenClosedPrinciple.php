<?php

declare(strict_types=1);

interface EmployeeInterface
{
    public function getSalary(): float;
    public function getBonus(): float;
}

class Developer implements EmployeeInterface
{
    public function getSalary(): float
    {
        return 1100;
    }

    public function getBonus(): float
    {
        return $this->getSalary() * 0.15;
    }
}

class Tester implements EmployeeInterface
{
    public function getSalary(): float
    {
        return 1000;
    }

    public function getBonus(): float
    {
        return $this->getSalary() * 0.14;
    }
}

class BonusCalculator
{
    private array $employees;

    public function __construct(array $employees) {
        $this->employees = $employees;
    }
    public function getTotal(): float
    {
        $bonus = [];

        foreach($this->employees as $employee) {
            $bonus[] = $employee->getBonus();
        }

        return array_sum($bonus);
    }
}
