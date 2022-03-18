<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;

class subjectController extends Controller
{
    public function index()
    {
        $subjects = Subject::all();
    }

    public function getCreate(User $user)
    {
        return view('subjectAdd', compact('user', 'user'));
    }

    public function submitSubject(Request $req, User $user)
    {
        Subject::create([
            'name' => $req->name,
            'tbl_user_idtbl_user' => $user->idtbl_user
        ]);
        return redirect()->route('user.index');
    }

    public function getUpdate(User $user)
    {
        $subject = Subject::where('tbl_user_idtbl_user', $user->idtbl_user)->get();
        return view('editSubject', compact('subject', 'subject'));
    }

    public function update(Request $req, Subject $subject)
    {
        $subject -> update([
            'nameSubject' => $req->nameSubject,
        ]);
        return redirect()->route('user.index');
    }
}
