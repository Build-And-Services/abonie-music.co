<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthenticateController extends Controller
{
    public function __construct() {
        if(Auth::check()) {
            Redirect::to("/dashboard/user")->send();
        } else {
            if(Auth::check()) {
                Redirect::to("/dashboard/admin")->send();
            }
        }
    }
    public function index() {
        return view("backend.auth.login");
    }

    public function register() {
        return view("backend.auth.register");
    }

    public function login(Request $request) {
        $credentials = $request->validate([
            "email"=> "required",
            "password"=> "required"
        ]);
        try {
            $attempt = Auth::attempt($credentials);
            if($attempt) {
                return redirect()->route("dashboard.admin")->with("success","Berhasil Login");
            }else{
                throw new \Exception("Something wrong");
            }
        } catch (\Throwable $th) {
            dd($th->getMessage());
            return redirect()->back()->with("error", $th->getMessage());
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route("login")->with("success","Berhasil logout");
    }
}
