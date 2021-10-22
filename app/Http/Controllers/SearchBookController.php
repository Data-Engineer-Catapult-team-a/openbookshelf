<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchBookController extends Controller
{
    public function index(){
        $hello = 'Hello World';
        return view('index', compact('hello'));
    }
}
