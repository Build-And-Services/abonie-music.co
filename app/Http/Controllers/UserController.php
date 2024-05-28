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
            'user' => $user
        ]);
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
