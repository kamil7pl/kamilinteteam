<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KlientKalendarzController extends Controller
{
    public function show()
    {
        return view('front.klient.kalendarz.index');
    }
}
