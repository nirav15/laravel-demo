<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function getTitle()
    {
        $title = "Home";
        $viewData = [
            "title" => $title
        ];
        return view('demo.home', $viewData);
    }
}
