<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MisVis;
use App\Http\Controllers\Controllers;

class MisvisController extends Controller
{
    public function index(){
        return view('Adminpc.MisVis.index');
    }

    public function create(){
        return view('Adminpc.MisVis.create');
    }

    public function store(Request $request){
        dd($request);
     //   MisVis::create($request->all());
     //   return redirect()->to('/MisVis');
    }
    
    
}


