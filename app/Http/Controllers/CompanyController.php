<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Company;
use App\Models\Industry;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    public function index(){
        $data['categories'] = Category::all();
        $data['companies'] = Company::all();
        return view('company', $data);
    }

    public function store(){
        $company = new Company();

        $company->category_id = \request()->category_id;
        $company->name = \request()->name;
        $company->save();

        return redirect()->back();
    }
}
