<?php

namespace App\Http\Controllers;

use App\Models\Status;
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
        $users = User::all();
        return view('backend.users.index', [
            'users' => $users,
        ]);
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('backend.users.show', [
            'getUser' => $user
        ]);
    }

    public function update(Request $request, $id)
    {
        try {
            $user = User::findOrFail($id);

            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|max:255',
                'password' => 'nullable|string|min:6',
                'img' => 'nullable|mimes:jpg,jpeg,png,webp|max:2048',
            ]);

            if (!empty($request->password)) {
                $password = bcrypt($request->password);
            } else {
                $password = $user->password;
            }
            if ($request->hasFile('img')) {
                $image = $request->file('img');
                $img = base64_encode(file_get_contents($image->getRealPath()));
            } else {
                $img = $user->img;
            }
            
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password,
                'img' => $img,
            ]);
            return redirect()->back()->with('success', 'User profile successfully updated');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();
            return redirect()->back()->with('success', 'Berhasil menghapus data');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function status(Request $request, $id)
    {
        try {
            $request->validate([
                'status' => 'required|boolean'
            ]);

            $user = User::find($id);
            $user->statuses->update([
                'status' => $request->status
            ]);

            return redirect()->back()->with('success', 'Status updated successfully!');
        } catch (\Throwable $th) {
            dd($th->getMessage());
        }
    }
}
