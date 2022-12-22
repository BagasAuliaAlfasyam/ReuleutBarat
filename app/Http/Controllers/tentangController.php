<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tentangController extends Controller
{
    public function tentang(){
        return view('tentang');
    }
}
