<?php

namespace App\Http\Controllers\Division\Gemastik;

use App\Http\Controllers\Controller;
use App\Models\DivisionProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.division.gemastik.profile', [
            'data' => DivisionProfile::where('user_id', Auth::user()->id)->first()
        ]);
    }

    /**
     * Valudation rules.
     */

    public function validation()
    {
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'guidebook_link' => 'required',
            'logo' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'timeline' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];

        return $rules;
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
        $data = DivisionProfile::where('user_id', $id)->firstOrFail();
        $rules = $this->validation();
        $rules['logo'] = 'nullable|image|mimes:jpeg,png,jpg|max:2048';
        $rules['timeline'] = 'nullable|image|mimes:jpeg,png,jpg|max:2048';
        $validatedData = $request->validate($rules);
        $validatedData['user_id'] = Auth::user()->id;


        if ($request->hasFile('logo')) {
            // Delete file
            if ($data->logo && Storage::exists('public/logo/' . $data->logo)) {
                Storage::delete('public/logo/' . $data->logo);
            }
            // Upload file
            $file = $request->file('logo');
            $randomString = Str::random(5);
            $nameFile = $randomString . '_' . $file->getClientOriginalName();
            $file->storeAs('public/logo', $nameFile);
            $validatedData['logo'] = $nameFile;
        }

        if ($request->hasFile('timeline')) {
            // Delete file
            if ($data->timeline && Storage::exists('public/timeline/' . $data->timeline)) {
                Storage::delete('public/timeline/' . $data->timeline);
            }
            // Upload file
            $file = $request->file('timeline');
            $randomString = Str::random(5);
            $nameFile = $randomString . '_' . $file->getClientOriginalName();
            $file->storeAs('public/timeline', $nameFile);
            $validatedData['timeline'] = $nameFile;
        }

        $data->update($validatedData);
        return redirect()->route('division.profile')->with('message', 'Updated profile successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
