<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Subject;


class usersController extends Controller
{
    public function index()
    {
        $users = User::leftjoin('tbl_subjects', 'tbl_subjects.tbl_user_idtbl_user', 'tbl_user.idtbl_user')
        ->select('tbl_user.idtbl_user', 'tbl_user.name', 'tbl_user.lastname', 'tbl_user.gender', 'tbl_user.age', 'tbl_subjects.nameSubject')
        ->get();
        // dd($users);
        return view('index', compact('users', 'users'));
    }

    public function getCreate()
    {
        return view('create');
    }

    public function submitUser(Request $req)
    {
        $user = User::create([
            'name' => $req->name,
            'lastname' => $req->lastname,
            'age' => $req->age,
            'gender' => $req->gender,
        ]);

        Subject::create([
            'nameSubject' => $req->subject,
            'tbl_user_idtbl_user'=> $user->idtbl_user
        ]);

        return redirect()->route('user.index');
    }

    public function update(Request $req, User $user)
    {
        $user -> update([
            'name' => $req->name,
            'lastname' => $req->lastname,
            'age' => $req->age,
            'gender' => $req->gender,
        ]);
        return redirect()->route('user.index');
    }

    public function getUpdate(User $user)
    {
        return view('edit', compact('user', 'user'));
    }

    public function destroy(User $user)
    {
        Subject::where('tbl_user_idtbl_user', $user->idtbl_user)->delete();
        $user -> delete();
        return redirect()->route('user.index');
    }
}
