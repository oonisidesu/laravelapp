<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request){
        $data = [
            'msg'=>''
        ];
        return view('hello.index', $data);
    }

    public function post(Request $request){
        $msg = $request->msg;
        $data = [
            'msg'=>$msg
        ];
        return view('hello.index', $data);
    }
}
