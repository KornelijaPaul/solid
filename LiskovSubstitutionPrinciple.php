<?php

declare(strict_types=1);

interface QuackableInterface {
    public function quack(): string;
}

interface FlyableInterface {
    public function fly(): string;
}

interface SwimmableInterface {
    public function swim(): string;
}

class Duck implements QuackableInterface, FlyableInterface, SwimmableInterface
{
    public function quack(): string
    {
        return 'Quack';
    }

    public function swim(): string
    {
        return 'Swim';
    }

    public function fly(): string
    {
        return 'Fly';
    }
}

class RubberDuck implements QuackableInterface, SwimmableInterface
{
    public function quack(): string
    {
        return 'Quack';
    }

    public function swim(): string
    {
        return 'Swim';
    }
}

class DuckFlyer
{
    public function makeFly(FlyableInterface $duck): string
    {
        return $duck->fly();
    }
}
