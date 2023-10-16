<?php

namespace App\Http\Controllers\Division;

use App\Http\Controllers\Controller;
use App\Models\Competition;
use App\Models\DivisionProfile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class CompetitionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('app.division.gemastik.competition', [
            'data' => Competition::orderBy('id', 'DESC')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('app.division.gemastik.create_competition');
    }

    /**
     * Valudation rules.
     */

    public function validation()
    {
        // $validate = $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'start_date' => 'required',
        //     'poster' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        // ], [
        //     'name.required' => 'Nama lomba wajib diisi',
        //     'description.required' => 'Deskripsi wajib diisi',
        //     'start_date.required' => 'Tanggal mulai wajib diisi',
        //     'poster.required' => 'Poster wajib diisi',
        //     'poster.mime' => 'Tipe file harus JPEG,PNG,JPG',
        //     'poster.max' => 'Maksimal ukuran file 2 MB',
        // ]);
        $rules = [
            'name' => 'required',
            'description' => 'required',
            'start_date' => 'required',
            'poster' => 'required|image|mimes:jpeg,png,jpg|max:2048'
        ];

        return $rules;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $rules = $this->validation();
        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['end_date'] = $request->end_date;
        $validatedData['guidebook_link'] = $request->guidebook_link;
        $validatedData['registration_link'] = $request->registration_link;
        $validatedData['status'] = 'Active';

        if ($request->hasFile('poster')) {
            $file = $request->file('poster');
            $randomString = Str::random(5);
            $nameFile = $randomString . '_' . $file->getClientOriginalName();
            $file->storeAs('public/poster', $nameFile);
            $validatedData['poster'] = $nameFile;
        }

        Competition::create($validatedData);
        return redirect()->route('division.competition')->with('message', 'Create competition successfuly');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('app.division.gemastik.show_competition', [
            'data' => Competition::findOrFail($id)
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('app.division.gemastik.edit_competition', [
            'data' => Competition::findOrFail($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $data = Competition::findOrFail($id);

        $rules = $this->validation();
        $rules['poster'] = 'nullable|image|mimes:jpeg,png,jpg|max:2048';
        $validatedData = $request->validate($rules);

        $validatedData['user_id'] = Auth::user()->id;
        $validatedData['end_date'] = $request->end_date;
        $validatedData['guidebook_link'] = $request->guidebook_link;
        $validatedData['registration_link'] = $request->registration_link;
        $validatedData['status'] = 'Active';

        if ($request->hasFile('poster')) {
            // Delete file
            if ($data->poster && Storage::exists('public/poster/' . $data->poster)) {
                Storage::delete('public/poster/' . $data->poster);
            }
            // Upload file
            $file = $request->file('poster');
            $randomString = Str::random(5);
            $nameFile = $randomString . '_' . $file->getClientOriginalName();
            $file->storeAs('public/poster', $nameFile);
            $validatedData['poster'] = $nameFile;
        }

        $data->update($validatedData);
        return redirect()->route('division.competition')->with('message', 'Updated data successfuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Competition::findOrFail($id);
        $data->delete();
        Storage::delete('public/poster/' . $data->poster);
        return redirect()->route('division.competition')->with('message', 'Deleted data successfuly');
    }


    /**
     * Update status.
     */

    public function done(string $id)
    {
        Competition::where('id', $id)->update(['status' => 'Done']);
        return redirect()->route('division.competition')->with('message', 'Updated status successfuly');
    }
}
