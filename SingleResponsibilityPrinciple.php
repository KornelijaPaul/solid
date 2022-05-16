<?php

// Single Responsibility Principle Violation

class Employee
{
    private string $name;

    private int $age;

    private string $email;

    public function __construct(string $name, int $age, string $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function formatJson()
    {
        return json_encode($this->email);
    }
}

// Refactored

class Employee
{
    private string $name;

    private int $age;

    private string $email;

    public function __construct(string $name, int $age, string $email)
    {
        $this->name = $name;
        $this->age = $age;
        $this->email = $email;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function getEmail(): string
    {
        return $this->email;
    }
}

class JsonReportFormatter
{
    public function format(Employee $employee)
    {
        return json_encode($employee->getEmail());
    }
}
