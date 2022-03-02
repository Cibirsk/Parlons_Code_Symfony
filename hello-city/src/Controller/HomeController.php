<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HomeController
{
    public function index(Request $request)
    {
        // $name = $_GET['name'];

        var_dump($request);
        die;

        if(isset($_GET['name'])){
            $name = $_GET['name'];
        }else{
            $name = 'World';
        }

        return new Response(<<<TEXT
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Hello-city</title>
        </head>
        <body>
        <h1>Hello $name !</h1> 
        </body>
        </html>
        TEXT);
    }
}