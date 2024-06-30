<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogicController extends Controller
{
    public function angka()
    {
        $angka = range(1, 100);
        return view('angka', compact('angka'));
    }
}
