<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Form;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        $supervisor = Auth::user();
        $data =  $request->validate([
            'comment' => ['required', 'string'],
            'form'  => ['required', 'numeric', 'exists:forms,id'],
            'file' => ['nullable', 'file', 'max:2048'],
        ]);
        if ($supervisor->hasRole('supervisor')) {

            if ($request->hasFile('file')) {
                $file = $request->file('file');
                $data['file'] = $file->store('files');
                $data['file_name'] = $file->getClientOriginalName();
            }

            $supervisor->forms()->findOrFail($data['form'])
                ->comments()
                ->create([
                    'user_id' => $supervisor->id,
                    'comment' => $data['comment'],
                    'file' => $data['file'] ?? null,
                    'file_name' => $data['file_name'] ?? null,
                ]);
        }

        return redirect()->route('supervisor.forms.index');
    }

    public function index(Form $form)
    {
        $comments = $form->comments()->with('user')->latest()->get();

        return view('supervisors.forms.comments.index', compact('comments'));
    }
}
