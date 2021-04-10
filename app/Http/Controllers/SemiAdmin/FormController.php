<?php

namespace App\Http\Controllers\SemiAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;

class FormController extends Controller
{

    public function show($id, $notification_id)
    {
        return view('managers.forms.show');
    }
}
