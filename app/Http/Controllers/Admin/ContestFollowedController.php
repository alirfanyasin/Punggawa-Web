<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContestFollowedController extends Controller
{
    public function index()
    {
        return view('app.contest_followed');
    }
}
