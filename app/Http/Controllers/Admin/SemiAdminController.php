<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\ManagerRequest;
use Illuminate\Support\Facades\Storage;

class SemiAdminController extends Controller
{

    public function index()
    {
        $users = User::role('manager')->get();
        return view('admin.semi-admin.index', compact('users'));
    }


    public function create()
    {
        return view('admin.semi-admin.create');
    }



    public function store(ManagerRequest $request)
    {
        $data = $request->validated();

        if ($request->hasFile('profile_picture')) {
            $data['profile_picture'] = $request->file('profile_picture')->store('profiles');
        }

        $user = User::create($data);

        $user->assignRole('manager');

        return redirect()->route('admin.semi-admins.index');
    }



    public function edit(User $semi_admin)
    {
        $user = &$semi_admin;

        if (!$user->hasRole('manager')) {
            abort(403);
        }

        return view('admin.semi-admin.edit', compact('user'));
    }



    public function update(ManagerRequest $request, User $semi_admin)
    {
        $data = $request->validated();

        if ($request->hasFile('profile_pic')) {
            if ($semi_admin->profile_picture) {
                Storage::delete($semi_admin->profile_picture);
            }

            $data['profile_picture'] = $request->file('profile_picture')->store('profiles');
        }

        $semi_admin->update($data);

        return redirect()->route('admin.semi-admins.index');
    }
}
