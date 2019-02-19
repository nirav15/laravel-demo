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
        $inputs = $request->all();
        $rules = [
            'name' => 'bail|required|regex:/^[a-zA-Z]+$/u',
            'description' => 'bail|required'
        ];
        if ($request['email'] == null) {
            $rules['number'] = 'bail|required|numeric';
            if ($request['number'] == null) {
                $rules['email'] = 'bail|required|email';
            }
        } else {
            $rules['email'] = 'bail|required|email';
            if ($request['number'] != null) {
                $rules['number'] = 'bail|required|numeric';
            }
        }
        $input = request()->validate($rules, [
            'name.required' => 'Name is required',
            'name.regx' => 'Name contain only latter',
            'email.required' => 'Email or number is required',
            'email.email' => 'Enter valid email id',
            'number.required' => 'Number or email is required',
            'number.numeric' => 'Enter valid number',
            'description.required' => 'Please write description'
        ]);
        return view('demo.contact');
    }
}
