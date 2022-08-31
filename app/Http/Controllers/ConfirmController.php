<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ConfirmController extends Controller
{
    public function confirm(){
        return view('input'); //getの時は登録画面に遷移
    }

    public function post_confirm(Request $request){
        $input = $request->all();
        $conn = "host=127.0.0.1 dbname=company_directory user=homestead password=secret";
        $link = pg_connect($conn);
        if (!$link) {
            $messag = '接続失敗です。';
            }

            $messag = "接続に成功しました";
            DB::insert('insert into employee (employee_id,family_name,first_name,section_id,mail,gender_id) values (?,?,?,?,?,?)',
            [$input['employee_id'],$input['first_name'],$input['last_name'],$input['department_list'],$input['mail'],$input['gender']]
            );
            // PostgreSQLに対する処理
            pg_close($link);
        return view('confirm',['messag' => $messag],['input' => $input]);
        // $validateRules = [
        //     'employee_id' => 'required'|'^YZ[0-9]{8}'|'max:10',
        //     'first_name' => 'required'|'max:25',
        //     'last_name' => 'required'|'max:25',
        //     'department_list' => 'required',
        //     'mail'=> 'required'|'email'|'max:256'|'^[a-zA-Z0-9._-]+@[a-zA-Z0-9._-]+(\.[a-zA-Z0-9._-]+)+$',
        //     'gender' => 'required'
        // ];

        // $validateMessages = [
        //     'employee_id.required' => '社員IDを入力してください',
        //     'employee_id.max:10' => '社員IDは10文字で入力してください',
            

        // ];

        // $this->validate($request, $validateRules, $validateMessages);
 
        // $data = $request->all();
        // ->with($data)
       
        
    }
}