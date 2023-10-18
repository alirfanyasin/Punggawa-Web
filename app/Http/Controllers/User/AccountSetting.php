<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class AccountSetting extends Controller
{
    public function index()
    {
        return view('app.user.account_setting', [
            'dataUser' => User::where('id', Auth::user()->id)->first()
        ]);
    }

    public function update(Request $request)
    {
        $id = (int)$request->id;
        $data = User::findOrFail($id);




        $validation = $request->validate([
            'name' => 'required',
            'email' => 'required',
            'nim' => 'required',
            'phone_number' => 'required',
            'place_of_birth' => 'required',
            'date_of_birth' => 'required',
            'study_program' => 'required',
            'generation' => 'required',
            'ktm' => 'nullable|image|mimes:jpg,jpeg,png|max:2048',
            'avatar' => 'nullable|image|mime:jpg,jpeg,png|max:2024',
        ]);

        if ($request->hasFile('ktm')) {
            if ($data->ktm && Storage::exists('public/ktm/' . $data->ktm)) {
                Storage::delete('public/ktm/' . $data->ktm);
            }

            $fileKtm = $request->file('ktm');
            $randomString = Str::random(5);
            $nameKtm = $randomString . "_" . $fileKtm->getClientOriginalName();
            $fileKtm->storeAs('public/ktm', $nameKtm);
            $validation['ktm'] = $nameKtm;
        }

        User::where('id', $id)->update($validation);


        return redirect()->route('account.setting')->with('message', 'Update account successfuly');
    }
}
