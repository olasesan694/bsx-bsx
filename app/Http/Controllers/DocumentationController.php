<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentationController extends Controller
{
    /**
     * Show the application dashboard.
     *
     */
    public function index()
    {
        return view('docs');
    }
}
