<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    //
    public function index()
    {
        return view('demo');
    }

    public function test()
    {
        return view('demo-test');
    }
}
