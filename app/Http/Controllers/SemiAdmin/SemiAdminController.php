<?php

namespace App\Http\Controllers\SemiAdmin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use DB;

class SemiAdminController extends Controller
{
    public function listing()
    {
        $curr_user = 'Semi Admin';
        $curr_user_permission = 'manager';
        $data = User::all();
        $count=User::count();
        return view('managers.index', compact('data','count' , 'curr_user' , 'curr_user_permission'));
    }
    public function addSemiAdmin($role = '' , $type = '', $filerRole ){
        $user_type = $type;
        $user_permission = $role;

        $users = User::whereHas("roles", function($q) use($filerRole){ $q->where("name", $filerRole); })->get();

        dd($users);
        return view('add' , compact('user_type' , 'user_permission'));

    }
    public function storeSemiAdmin(Request $request){
//        $request['password'] =
       $user =  User::create($request->all());

       $user->assignRole($request->user_permission);
       return redirect()->back();

    }
}
