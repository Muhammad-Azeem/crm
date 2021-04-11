<?php

namespace App\Http\Controllers\SemiAdmin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use App\Models\User;

class FormController extends Controller
{

    public function show($id, $notification_id)
    {
        return view('managers.forms.show');
    }

    public function view(Form $form)
    {
        return view('', compact('form'));
    }

    public function index(User $employee)
    {
        $forms = $employee->forms()->where('status', 'approved')->get();

        return view('semi-admin.supervisors.employees.forms.index', compact('forms'));
    }
}
