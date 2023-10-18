<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use Illuminate\Http\Request;

class InvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.user.invoice');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.user.create_invoice', [
            'data' => Competition::where('status', 'Active')->get(),
        ]);
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


    public function selected($id)
    {
        // $dataSelected = Competition::findOrFail($id);
        $dataSelected = Competition::with('user')->findOrFail($id);

        return response()->json(['dataSelected' => $dataSelected]);
    }
}
