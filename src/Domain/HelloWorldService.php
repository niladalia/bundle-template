<?php
namespace HelloBundle\HelloWorldBundle\Domain;

class HelloWorldService
{
    public function sayHello(): string
    {
        return "Hello World from the service!";
    }
}
