<?php

namespace App\Http\Controllers;

use Validator;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $title = "Contact";
        $viewData = [
            "title" => $title
        ];
        return view('demo.contact', $viewData);
    }

    public function saveContact(Request $request)
    {
        // $inputs = $request->all();
        $input = request()->validate([
            'name' => 'bail|required|regex:/^[a-zA-Z]+$/u',
            'email' => 'bail|required|email',
            'number' => 'bail|required|numeric',
        ], [
            'name.required' => 'Name is required',
            'name.regx'  => 'Name contain only latter',
            'email.required' => 'Email is required',
            'email.email' => 'Enter valid email id',
            'number.required' => 'Number is required',
            'number.numeric' => 'Enter valid number',
        ]);
        return view('demo.contact');
    }
}
