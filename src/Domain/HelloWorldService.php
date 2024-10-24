<?php
namespace YourVendor\HelloWorldBundle\Domain;

class HelloWorldService
{
    public function sayHello(): string
    {
        return "Hello World from the service!";
    }
}
