<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Industry;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $data['industries'] = Industry::all();
        $data['categories'] = Category::all();
        $data['companies'] = Company::all();
        $data['products'] = Product::all();
        return view('product', $data);
    }

    public function store(){
        $product = new Product();

        $product->industry_id = \request()->industry_id;
        $product->category_id = \request()->category_id;
        $product->company_id = \request()->company_id;
        $product->name = \request()->name;
        $product->save() ;
        return redirect()->back();
    }
}
