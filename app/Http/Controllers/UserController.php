<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function __construct()
    {
        if (!Auth::user()->hasRole('superadmin')) {
            Redirect::to("/dashboard")->send();
        }
    }

    public function index()
    {
        $users = User::paginate(10);
        return view('backend.users.index', [
            'users' => $users
        ]);
    }
}
