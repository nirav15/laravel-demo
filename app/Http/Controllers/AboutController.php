<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function getTitle()
    {
        $title = "About";
        $viewData = [
            "title" => $title
        ];
        return view('demo.about', $viewData);
    }
}
