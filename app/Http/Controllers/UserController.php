<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function avatar ()
    {
        return view('change-avatar');
    }

    public function saveAvatar (Request $request)
    {
        $file = $request->file('image');

        if (!$file) return back();

        $filename = Auth::user()->id . '/avatar.' . $file->getClientOriginalExtension();

        Storage::put('/avatars/' . $filename, file_get_contents($file));

        User::where('id', Auth::user()->id)->update([
            'avatar' => Storage::url('avatars/' . $filename)
        ]);

        return redirect()->to('/home');
    }

    public function setAvatar (int $avatar)
    {
        $filename = Auth::user()->id . '/avatar.png';

        Storage::put('/avatars/' . $filename, Storage::disk('local')->get('avatars/avatar' . $avatar . '.png'));

        User::where('id', Auth::user()->id)->update([
            'avatar' => Storage::url('avatars/' . $filename)
        ]);

        return redirect()->to('/home');
    }
}
