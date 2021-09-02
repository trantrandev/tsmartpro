<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminUserController extends Controller
{
    function show() {
        return view('admin.user.list');
    }
}
