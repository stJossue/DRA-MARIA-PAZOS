<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inicio;

class PaginaController extends Controller
{
    Public function Inicio(){
        $getInicio = Inicio::All();
        //($getInicio);
        return view('Sitioweb/index',compact('getInicio'));
    }
}
