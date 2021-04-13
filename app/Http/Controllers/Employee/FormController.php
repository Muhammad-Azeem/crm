<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Form;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use App\Notifications\FormSubmitNotification;
use App\Models\User;

class FormController extends Controller
{

    public function index()
    {
        $forms = Auth::user()->forms()->get();

        return view('users.forms.index', compact('forms'));
    }



    public function create()
    {
        return view('users.add-form');
    }

    public function store(Request $request)
    {
        //        dd($request->all());

        $request->validate([
            'user_id' => ['nullable'],
            'parent_id' => ['nullable'],
            'date' => ['required'],
            'tl_name' => ['required'],
            'agent_name' => ['required'],
            'customer_name' => ['required'],
            'cell_phone' => ['required'],
            'service_type' => ['required'],
            'billing_ac_number' => ['required'],
            'total_to_pay' => ['required'],
            'receivable' => ['required'],
            'profile_pic' => ['nullable'],

        ]);

        $data = $request->all();
        if ($request->file('profile_pic')) {

            $filename = time() . '.' . $request->profile_pic->extension();
            $request->profile_pic->move(public_path('uploads'), $filename);
            $data['profile_pic'] = $filename;
        } else {
            $filename = NULL;
        }

        $user = auth()->user();
        $supervisor = User::findOrFail($user->parent_id);

        $data['comment_disable_time'] = now()->addDays(2)->toDateTimeString();


        $form = $user->forms()->create($data);

        $supervisor->notify(new FormSubmitNotification($user, $form->id));

        return redirect()->route('employee.forms.index');
    }


    public function show(Form $form, $notification_id)
    {
        $user = Auth::user();

        if ($form->user_id !== $user->id) abort(403);

        $user->notifications()->findOrFail($notification_id)->markAsRead();

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
