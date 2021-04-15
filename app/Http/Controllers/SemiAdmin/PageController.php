<?php

namespace App\Http\Controllers\SemiAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class PageController extends Controller
{
    public function dashboard()
    {
        $user = Auth::user();

        $totalSupervisors = $user->supervisors()->count();

        $totalEmployees = $user->employees_count;

        $totalForms  = $user->employees_forms_count;

        $employees = $user->semi_admin_employees;

        $forms = $user->approvedForms();

        $notifications = $user->notifications()->limit(5)->get();


        return view('semi-admin.dashboard', compact(['totalSupervisors', 'totalEmployees', 'totalForms', 'employees', 'forms', 'notifications']));
    }

    public function forms()
    {
        $forms = Auth::user()->forms;

        return view('semi-admin.forms', compact('forms'));
    }


    public function profile()
    {
        $user = Auth::user();
        return view('semi-admin.profile', compact('user'));
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

        return redirect()->route('manager.profile');
    }
}
