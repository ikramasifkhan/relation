<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Industry;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        $data['industries'] = Industry::all();
        $data['categories'] = Category::all();
        return view('category', $data);
    }

    public function store(){
        $category = new Category();
        $category->industry_id = \request()->industry_id;
        $category->name = \request()->name;
        $category->save();

        return redirect()->back();
    }

    public function details($id){
        $data['category'] = Category::where('id', $id)->first();
        return view('category-details', $data);
    }
}
