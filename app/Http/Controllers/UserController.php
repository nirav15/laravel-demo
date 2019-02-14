<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $hello = "Hello World111";
        $viewData = [
            "hello" => $hello
        ];
        return view('index', $viewData);
    }
}
