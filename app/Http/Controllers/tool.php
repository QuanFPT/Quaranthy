<?php

namespace App\Http\Controllers;

use App\Http\Requests\chisorequest;
use Illuminate\Http\Request;

class tool extends Controller
{
    public function index(){
        return view('tool.master');
    }
    public function store(chisorequest $request){
        $height = $request->height;
        $weight = $request->weight;
        $age = $request->age;
        $sex = $request->sex;
    }
}
