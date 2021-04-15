<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EmployeeController extends Controller
{



    public function index()
    {
        $user = Auth::user();

        $users = $user->employees()->get();

        $usersCount = $users->count();


        return view('supervisors.employees.index', compact('users', 'usersCount'));
    }
}
