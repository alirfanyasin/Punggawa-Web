<?php

namespace App\Http\Controllers\User;

use App\Charts\ParticipationChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(ParticipationChart $participationChart)
    {
        return view('app.dashboard', [
            'chart' => $participationChart->build()
        ]);
    }
}
