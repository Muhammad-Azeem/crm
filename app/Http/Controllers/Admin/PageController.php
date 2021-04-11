<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('admin');
    }

    public function profile()
    {
        $user = Auth::user();
        return view('admin.profile', compact('user'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'f_name' => ['required', 'string'],
            'l_name' => ['required', 'string'],
            'dob' => ['nullable'],
            'phone_number' => ['nullable', 'string'],
        ]);

        Auth::user()->update($data);

        return redirect()->route('admin.profile');
    }
}
