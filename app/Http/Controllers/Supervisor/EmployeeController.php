<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EmployeeController extends Controller
{

    // public function showForm()
    // {
    //     $user = Auth::user();
    //     $role = $user->getRoleNames()->first();
    //     $can_change_status = true;

    //     $forms = Form::get();

    //     if ($role == 'customer') {
    //         $forms = Form::where('user_id', $user->id)->get();
    //         $can_change_status = false;
    //     }
    //     if ($role == 'supervisor') {

    //         $user_ids = User::where('parent_id', $user->id)->pluck('id');
    //         $forms = Form::wherein('user_id', $user_ids)->get();
    //     }
    //     if ($role == 'manager') {
    //         $semi_admin_ids = User::where('parent_id', $user->id)->pluck('id');
    //         $user_ids = User::wherein('parent_id', $semi_admin_ids)->pluck('id');
    //         $forms = Form::wherein('parent_id', $user_ids)->where('is_approved_by_supervisor', 1)->get();
    //     }
    //     //        else{
    //     //            $forms = Form::get();
    //     //        }
    //     return view('forms', compact('forms', 'can_change_status'));
    // }

    public function changeStatus($status, $form_id)
    {
        Form::where('id', $form_id)->update([
            'is_approved_by_supervisor' => $status,
        ]);
        return redirect()->back()->with('success', 'Status changed successfully');
    }

    public function index()
    {
        $curr_user = 'Customer';
        $canSelect = 'Supervisor';
        $curr_user_permission = 'customer';
        $filterRole = 'supervisor';
        $data = User::whereHas("roles", function ($q) use ($curr_user_permission) {
            $q->where("name", $curr_user_permission);
        })->get();

        $count = count($data);

        return view('supervisors.index', compact('data', 'count', 'canSelect', 'curr_user', 'filterRole', 'curr_user_permission'));
    }
}
