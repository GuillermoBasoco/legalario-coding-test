<?php

namespace App\Http\Controllers\Web;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function userActivity()
    {
        $users = User::all();
        return view('admin.user_activity', compact('users'));
    }
}
