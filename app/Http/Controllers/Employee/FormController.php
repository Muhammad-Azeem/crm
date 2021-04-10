<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class FormController extends Controller
{

    public function show(Form $form, $notification_id)
    {
        $user = Auth::user();

        if ($form->user_id !== $user->id) abort(403);


        return view('users.show-form', compact('user', 'form'));
    }


    public function view(Form $form)
    {
        $user = Auth::user();

        return view('users.show-form', compaction('user', 'form'));
    }

    public function updateStatus(Request $request, Form $form)
    {
        $user = Auth::user();

        $data = $request->validate([
            'status' => ['required', Rule::in(['approved', 'rejected', 'pending'])],
        ]);

        if ($user->hasRole('supervisor')) {
            $user->forms()->findOrFail($form->id)->update(['status' => $data['status']]);
        }

        return redirect()->route('employee.forms.index');
    }
}
