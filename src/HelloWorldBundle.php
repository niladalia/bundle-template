<?php
// src/HelloWorldBundle.php
namespace YourVendor\HelloWorldBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class HelloWorldBundle extends Bundle
{
    public function boot()
    {
        parent::boot();
        echo "Hello World from HelloWorldBundle!\n";
    }
}
