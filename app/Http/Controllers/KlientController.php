<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlientController extends Controller
{
    public function show()
    {
        return view('front.klient.index');
    }
}