<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tool extends Controller
{
    public function index(){
        return view('tool.master');
    }
}
