<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AuthenticateController extends Controller
{
    public function __construct() {
        if(Auth::check()) {
            Redirect::to("/dashboard")->send();
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
                return redirect()->route("dashboard")->with("success","Berhasil Login");
            }else{
                throw new \Exception("Something wrong");
            }
        } catch (\Throwable $th) {
            return redirect()->back()->with("error", "Email atau password anda salah.");
        }
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'password' => 'required:min:6',
            'password_confirmation' => 'required_with:password|same:password|min:6'
        ]);
        try {
            $user = User::create($request->all())->assignRole('user');
            return redirect()->route('login')->with('success','Your Account success to created');
        } catch (\Throwable $th) {
            return back()->with('error','Something was wrong when create your account.');
        }
    }

    public function logout(Request $request) {
        Auth::logout();
        return redirect()->route("login")->with("success","Berhasil logout");
    }
}
