<?php

declare(strict_types=1);

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

    public function formatJson(): string
    {
        return json_encode(
            [
                "general_email" => $this->email,
                "official_name" => $this->name,
            ],
            JSON_THROW_ON_ERROR
        );
    }
}
