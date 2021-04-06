<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{
    //
    //for route model binding Form $form
    public function show($id, $notification_id)
    {
        return view('users.show-form');
    }
}
