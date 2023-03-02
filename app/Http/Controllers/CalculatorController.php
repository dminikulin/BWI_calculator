<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    public function showForm(){
        return view("calculator.form");
    }

    public function showResult(Request $request ){
        $height=$request->height;
        $weight=$request->weight;
        $r=round($weight / pow($height/100, 2), 2);
        return view("calculator.result", [
            'result'=>$r
        ]);
    }
}
