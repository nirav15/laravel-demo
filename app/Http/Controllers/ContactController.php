<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getTitle()
    {
        $title = "Contact";
        $viewData = [
            "title" => $title
        ];
        return view('demo.contact', $viewData);
    }
}
