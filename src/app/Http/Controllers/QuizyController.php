<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QuizyController extends Controller
{
    public function index($id = '1', $message = '渡邉瑛貴')
    {
        return <<<EOF

        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Document</title>
        </head>
        <body>
            <p>
            {$id}
            {$message}
            </p>
        </body>
        </html>
        EOF;
    }
}
