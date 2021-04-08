<?php

namespace App\Http\Controllers\Employee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Form;

class CommentController extends Controller
{

    public function store(Request $request)
    {
        $employee = Auth::user();

        $data =  $request->validate([
            'comment' => ['required', 'string'],
            'form'  => ['required', 'numeric', 'exists:forms,id'],
        ]);

        if ($employee->hasRole('customer')) {

            $employee->forms()->findOrFail($data['form'])
                ->comments()
                ->create(['user_id' => $employee->id, 'comment' => $data['comment']]);
        }

        return redirect()->route('employee.forms.index');
    }


    public function index(Form $form)
    {
        $comments = $form->comments()->with('user:id,name')->get();

        return view('user.forms.comments.index', compact('comments'));
    }
}
