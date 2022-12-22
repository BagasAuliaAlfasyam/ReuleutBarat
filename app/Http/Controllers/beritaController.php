<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class beritaController extends Controller
{
    public function berita()
    {
        return view('berita');
    }
}
