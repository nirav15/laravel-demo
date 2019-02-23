<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use Datatables;

class CategoryYajraController extends Controller
{
    public function index(){
        return view('demo.categoryYajra');
    }
    public function getData(){
        return Datatables::of(Category::query())->make(true);
    }
}
