<?php

namespace App\Http\Controllers\SuperAdmin;

use App\Charts\BootcampChart;
use App\Charts\ParticipationChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(ParticipationChart $participationChart, BootcampChart $bootcampChart)
    {
        return view('app.super-admin.dashboard', [
            'chart' => $participationChart->build(),
            'bootcamp' => $bootcampChart->build(),
        ]);
    }
}
