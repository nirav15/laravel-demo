<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Category;
use Yajra\DataTables\EloquentDataTable;
use Datatables;

class CategoryController extends Controller
{
    public function category()
    {
        $title = "Category";
        $viewData = [
            "title" => $title,
        ];
        return view('demo.category', $viewData);
    }

    public function categoryPost(Request $request)
    {
        $columns = array(
            0 => 'id',
            1 => 'name',
            3 => 'description',
            4 => 'status',
            5 => 'created_at',
            6 => 'updated_at',
        );

        $totalData = Category::count();

        $totalFiltered = $totalData;

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
        $search = $request->input('search.value');

        $query = Category::offset($start);
        if (!empty($request->input('search.value'))) {
            $query->where('id', 'LIKE', "%{$search}%")
                ->orWhere('name', 'LIKE', "%{$search}%")
                ->orWhere('description', 'LIKE', "%{$search}%")
                ->orWhere('status', 'LIKE', "%{$search}%")
                ->orWhere('created_at', 'LIKE', "%{$search}%")
                ->orWhere('updated_at', 'LIKE', "%{$search}%");
        }
        $categories = $query->limit($limit)
            ->orderBy($order, $dir)
            ->get();

        $totalFiltered = Category::where('id', 'LIKE', "%{$search}%")
            ->orWhere('name', 'LIKE', "%{$search}%")
            ->orWhere('description', 'LIKE', "%{$search}%")
            ->orWhere('status', 'LIKE', "%{$search}%")
            ->orWhere('created_at', 'LIKE', "%{$search}%")
            ->orWhere('updated_at', 'LIKE', "%{$search}%")
            ->count();

        return response()->json([
            "draw"            => intval($request->input('draw')),
            "recordsTotal"    => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data"            => $categories,
        ]);
    }

    public function deleteData(Request $request){
        $id = $request->input('id');
        $row = Category::where('id',$id)->delete();
        return $row;
    }

    public function editData(Request $request){
        $id = $request->input('id');
        $row = Category::where('id',$id)->get();
        return $row;
    }
}
