<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function test()
    {
        return "Hello world from TestController";
    }
    public function test2()
    {
        return view('helloworld');
    }
    
}
