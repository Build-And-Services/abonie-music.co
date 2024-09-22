<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    public function show($id)
    {
        try {
            $user = User::findOrFail($id);
            return view('backend.profile.index', [
                'getUser' => $user
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
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
                // if (!empty($user->img)) {
                //     $oldImagePath = 'user-images/' . $user->img;

                //     if (Storage::disk('public')->exists($oldImagePath)) {
                //         Storage::disk('public')->delete($oldImagePath);
                //     }
                // }
                // $image->store('user-images', 'public');
                $img = base64_encode(file_get_contents($image->getRealPath()));
            } else {
                $img = $user->img;
            }
            // dd($img);
            // dd($password);
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $password,
                'img' => $img,
            ]);
            return redirect()->back()->with('success', 'Profile successfully updated');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

}
