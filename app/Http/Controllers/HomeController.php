<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home()
    {
        $title = "Home";
        $viewData = [
            "title" => $title
        ];
        return view('demo.home', $viewData);
    }
}
