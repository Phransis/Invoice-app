<?php

namespace App\Http\Controllers;

use App\Models\Tax;
use Illuminate\Http\Request;

class TaxController extends Controller
{
    //
    public function index(){
        $taxes = Tax::all();
        return view("taxes.index",compact("taxes"));
    }

    public function create(){
        return view("taxes.create");
    }

    public function store(Request $request){
        Tax::create($request->all());
        return redirect()->route('taxes.index')->with('success','Tax added successfully');
    }
}
