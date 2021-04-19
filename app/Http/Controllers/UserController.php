<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    public function verify(User $user)
    {
        $user->update([
            'verified' => 1
        ]);

        return redirect(route('user.view'));
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect(route('user.view'));
    }
}
