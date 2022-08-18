<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConfirmController extends Controller
{
    public function confirm(){
        return view('input'); //getの時は登録画面に遷移
    }

    public function post_confirm(Request $request){
        $validateRules = [
            'employee_id' => 'required'|'^YZ[0-9]{8}'|'max:10',
            'first_name' => 'required'|'max:25',
            'last_name' => 'required'|'max:25',
            'department_list' => 'required',
            'mail'=> 'required'|'email'|'max:256'|'^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+(\.[a-zA-Z0-9._-]+)+$',
            'gender' => 'required'
        ];

        $validateMessages = [
            'employee_id.required' => '社員IDを入力してください',
            'employee_id.max:10' => '社員IDは10文字で入力してください',
            

        ];

        $this->validate($request, $validateRules, $validateMessages);
 
        $data = $request->all();
       
        return view('confirm')->with($data);
    }
}