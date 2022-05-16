<?php

declare(strict_types=1);

class Duck
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

class RubberDuck extends Duck
{
    public function fly(): string
    {
        throw new Exception('Cannot fly');
    }
}

class DuckFlyer
{
    public function makeFly(Duck $duck): string
    {
        return $duck->fly();
    }
}
