<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HelloWorld
{
    public function index()
    {
        return new Response(
            '<html><body>Hello World !</body></html>'
        );
    }
}