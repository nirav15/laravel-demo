<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function category()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(3);
        $title = "Category";
        $viewData = [
            "title" => $title,
            'categories' => $categories
        ];
        return view('demo.category', $viewData);
    }
    public function categorySearch(Request $request)
    {
        $search = $request['search'];
        $title = "Category";
        $category = Category::where('id', 'like', '%' . $search . '%')
            ->orWhere('name', 'like', '%' . $search . '%')
            ->orWhere('description', 'like', '%' . $search . '%')
            ->orWhere('status', 'like', '%' . $search . '%')
            ->orWhere('created_at', 'like', '%' . $search . '%')
            ->orWhere('updated_at', 'like', '%' . $search . '%')
            ->orderBy('id', 'desc')
            ->paginate(3);

        $viewData = [
            "title" => $title,
            'categories' => $category
        ];

        return view('demo.category', $viewData);
    }
}
