<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    function show() {
        $users = User::all();
        return view('admin.user.list', compact('users'));
    }

    function add() {
        return view('admin.user.add');
    }
}
