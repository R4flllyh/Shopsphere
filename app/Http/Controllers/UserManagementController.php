<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index() {
        $user = User::all();
        return view('pages.user-management', compact('user'));
    }
}
