<?php

namespace App\Http\Controllers\User;

use App\Charts\BootcampChart;
use App\Charts\ParticipationChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(ParticipationChart $participationChart, BootcampChart $bootcampChart)
    {
        return view('app.user.dashboard', [
            'chart' => $participationChart->build(),
            'bootcamp' => $bootcampChart->build(),
        ]);
    }
}
