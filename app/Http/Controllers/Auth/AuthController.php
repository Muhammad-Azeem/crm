<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function login_form()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if ($validator->fails()) {

            return Redirect::to(URL::previous())->with('error', $validator->messages()->first());
        }


        $email = User::where('email', $request->email)->first();
        if ($email) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

                if(Auth::user()->hasrole('admin')){
                    return redirect()->route('admin.dashboard') ;
                }
                if(Auth::user()->hasrole('manager')){
                    return redirect()->route('manager.dashboard') ;
                }
                if(Auth::user()->hasrole('supervisor')){
                    return redirect()->route('supervisor.dashboard') ;
                }


                return \redirect(\url('/main-view'))->with('Success', 'LoggedIn Successfully');
            } else {
                return \redirect()->back()->with('error', 'Invalid Password');
            }
        } else {
            return \redirect()->back()->with('error', 'Email Not Found');
        }

    }
    public function logout(){
        Auth::logout();
        return redirect(url('login'));
    }
}
