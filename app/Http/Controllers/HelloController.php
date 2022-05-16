<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index() 
    {
        $data = ['msg'=>'これはコントローラから渡されたメッセージです。','sato'=>'佐藤'];
        return view('hello.index', $data);
    }
}