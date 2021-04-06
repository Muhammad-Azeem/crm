<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Notifications\SendEmployeeStatusUpdateNotification;
use App\Notifications\SendSemiAdminStatusUpdateNotification;

class FormController extends Controller
{
    //route model binding Form $form attribute use this when make functional.
    public function show($id, $notification_id)
    {
        $form = 'form';
        $supervisor = Auth::user();


        return view('supervisors.forms.show', compact('form'));
    }


    public function update(Request $request, Form $form)
    {
        try {
            $supervisor = Auth::user();

            $employee = User::find($form->user_id);

            $semiAdmin = user::find($supervisor->parent_id);

            $employee->notify(new SendEmployeeStatusUpdateNotification($supervisor, $form->id));

            $semiAdmin->notify(new SendSemiAdminStatusUpdateNotification($supervisor, $form->id));
        } catch (\Exception $exception) {
        }

        return redirect()->back();
    }
}
