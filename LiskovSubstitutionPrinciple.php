<?php

//Liskov Substitution Principle Violation

class Duck
{
    public function quack()
    {

    }

    public function swim()
    {

    }

    public function fly()
    {

    }
}

class RubberDuck extends Duck
{
    public function quack()
    {
        throw new Exception('A rubber duck cannot quack');
    }

    public function swim()
    {
        throw new Exception('A rubber duck cannot swim');
    }
}

// Refactored

interface QuackableInterface {
    public function quack();
}

interface FlyableInterface {
    public function fly();
}

interface SwimmableInterface {
    public function swim();
}

class Duck implements QuackableInterface, FlyableInterface, SwimmableInterface
{
    public function quack()
    {

    }

    public function fly()
    {

    }

    public function swim()
    {

    }
}

class RubberDuck implements SwimmableInterface
{
    public function swim()
    {

    }
}
