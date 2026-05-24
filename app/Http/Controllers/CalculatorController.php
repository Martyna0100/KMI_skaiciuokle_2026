<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    //public function calculate(Request $request)
   // {
        //$weight = $request->weight;
        //$height = $request->height;
        //$result = $weight / ($height * $height);
        //return view('results');
   // }
}
