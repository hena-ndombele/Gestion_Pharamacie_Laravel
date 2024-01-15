<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EntreeController extends Controller
{
    public function index(){
        return view('entrees.index');
    }
}
