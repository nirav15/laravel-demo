<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $title = "About";
        $viewData = [
            "title" => $title
        ];
        return view('demo.about', $viewData);
    }
}
