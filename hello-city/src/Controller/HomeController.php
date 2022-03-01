<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function index()
    {
        return new Response('<h1>Hello from France</h1>');
    }
}