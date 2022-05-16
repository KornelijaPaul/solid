<?php

// Interface Segregation Principle Violation

interface Employee
{
    public function canWriteCode(): bool;

    public function canMeetCustomer(): bool;

    public function canResearchCustomerExperience(): bool;

    public function canGetHoliday(): bool;

    public function canHaveBreak(): bool;
}

// Refactored

interface Employee
{
    public function canGetHoliday(): bool;

    public function canHaveBreak(): bool;
}

interface Programmer
{
    public function canWriteCode(): bool;
}

interface ProductOwner
{
    public function canMeetCustomer(): bool;

    public function canResearchCustomerExperience(): bool;
}
