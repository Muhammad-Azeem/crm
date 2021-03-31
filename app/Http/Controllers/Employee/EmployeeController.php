<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function listing()
    {
        $curr_user = 'Customer';
        $curr_user_permission = 'customer';
        $filterRole = 'supervisor';
        $data = User::whereHas("roles", function ($q) use ($curr_user_permission) {
            $q->where("name", $curr_user_permission);
        })->get();
        $count=count($data);

        return view('managers.index', compact('data','count' , 'curr_user' ,'filterRole', 'curr_user_permission'));

    }
}
