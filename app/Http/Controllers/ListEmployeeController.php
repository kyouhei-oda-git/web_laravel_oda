<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListEmployeeController extends Controller
{
    public function list(){
        return view('listEmployee');
}
}
