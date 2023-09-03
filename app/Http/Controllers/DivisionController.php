<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DivisionController extends Controller
{
    public function index()
    {
        return view('division.index');
    }

    public function gemastik()
    {
        return  view('divison.gemastik');
    }
}
