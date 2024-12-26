<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MisVisController extends Controller
{
    public function index (){
        return view('Adminpc.MisVis.index');
    }

    public function store(Request $request){
        dd($request);
     //   MisVis::create($request->all());
     //   return redirect()->to('/MisVis');
    }

    public function create(){
        return view('Adminpc.MisVis.create');
    }

    public function edit(){
        return view('Admin.MisVis.edit');
    }
}
