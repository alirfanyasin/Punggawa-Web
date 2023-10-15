<?php

namespace App\Http\Controllers\Division\Gemastik;

use App\Charts\BootcampChart;
use App\Charts\ParticipationChart;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(ParticipationChart $participationChart, BootcampChart $bootcampChart)
    {
        return view('app.division.gemastik.dashboard', [
            'chart' => $participationChart->build(),
            'bootcamp' => $bootcampChart->build(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
