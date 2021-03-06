<?php

declare(strict_types=1);

interface EmployeeInterface
{
    public function getName(): string;

    public function getSurname(): string;

    public function getJobTitle(): string;
}

interface EmployeeWithPublicFacilitiesInterface
{
    public function getPublicTransportationFee(): float;

    public function getPublicCateringFee(): float;
}

class PublicFacilitiesCalculator
{
    public function getTotal(EmployeeWithPublicFacilitiesInterface $employee): float
    {
        return $employee->getPublicCateringFee() + $employee->getPublicTransportationFee();
    }
}
