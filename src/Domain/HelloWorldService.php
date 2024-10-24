<?php

namespace TemplateBundle\Domain;

class HelloWorldService
{
    public function sayHello(): string
    {
        return "Hello World from the bundle template service!";
    }
}
