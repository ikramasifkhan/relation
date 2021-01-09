<?php

namespace App\Http\Controllers;

use App\Models\Industry;
use Illuminate\Http\Request;

class IndustryController extends Controller
{
    public function index(){
        $data['industries'] = Industry::all();
        return view('industry', $data);
    }

    public function store(Request $request){
        $industry = new Industry();
        $industry->name = \request()->name;
        $industry->save();

        return redirect()->back();
    }
}
