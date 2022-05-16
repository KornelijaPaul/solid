<?php

// Open Closed Principle Violation

class Programmer
{
    private int $salary;

    public function getSalary(): int
    {
        return $this->salary;
    }
}

class Tester
{
    private int $salary;

    public function getSalary(): int
    {
        return $this->salary;
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

        foreach($this->employees as $employee) {
            if ($employee instanceof Programmer) {
                $bonus[] = $employee->getSalary() * 0.15;
            } elseif ($employee instanceof Tester)
                $bonus[] = $employee->getSalary() * 0.14;
        }

        return array_sum($bonus);
    }
}

// Refactored

interface Employee
{
    public function getBonus(): int;
}

class Programmer implements Employee
{
    private int $salary;

    public function getBonus(): int
    {
        return $this->salary * 0.15;
    }
}

class Tester implements Employee
{
    private int $salary;

    public function getBonus(): int
    {
        return $this->salary * 0.14;
    }
}

class BonusCalculator
{
    private array $employees;

    public function __construct(array $employees) {
        $this->employees = $employees;
    }
    public function getTotal(): int
    {
        $bonus = [];

        foreach($this->employees as $employee) {
            $bonus[] = $employee->getBonus();
        }

        return array_sum($bonus);
    }
}
