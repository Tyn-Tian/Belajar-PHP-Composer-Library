<?php

namespace Christian\Belajar;

class Customer
{
    public function __construct(private string $name)
    {
    }

    public function sayHello(string $name = "Guest")
    {
        echo "Hello $name, My name is $this->name";
    }
}
