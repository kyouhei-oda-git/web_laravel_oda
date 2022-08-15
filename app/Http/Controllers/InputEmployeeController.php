<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputEmployeeController extends Controller
{
    public function input(){
        return view('input');
    }
}
