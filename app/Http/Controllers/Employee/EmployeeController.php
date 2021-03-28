<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function listing()
    {
        $data = User::all();
        $count = User::count();
        return view('managers.index', compact('data','count'));
    }
}
