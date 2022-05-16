<?php

declare(strict_types=1);

interface EmployeeInterface
{
    public function getName(): string;

    public function getSurname(): string;

    public function getJobTitle(): string;

    public function getPublicTransportationFee(): float;

    public function getPublicCateringFee(): float;
}

class PublicFacilitiesCalculator
{
    public function getTotal(EmployeeInterface $employee): float
    {
        return $employee->getPublicCateringFee() + $employee->getPublicTransportationFee();
    }
}
