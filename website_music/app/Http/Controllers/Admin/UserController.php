<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Http\Controllers\Controller;


class UserController extends Controller
{
    public function showUser()
    {
        $users = User::where('manager', '!=', '1')->paginate(10);
        return view('admin.user.list', compact('users'));
    }

    // public function showOldComment(User $user)
    // {
    //     return $user;
    // }
}
