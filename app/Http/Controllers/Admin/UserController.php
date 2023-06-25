<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function list()
    {
        $users = User::latest()->where('registration_status', 2)->get();
        return view('admin.user.list', compact('users'));
    }
}
