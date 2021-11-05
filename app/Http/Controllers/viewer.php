<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viewer extends Controller
{
    public function index(){
        return view('master.master');
    }
}
