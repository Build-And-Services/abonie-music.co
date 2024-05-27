<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;

class RolesController extends Controller
{

    public function __construct(){
        if(!Auth::user()->hasRole('superadmin')){
            Redirect::to("/dashboard")->send();
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $roles = DB::table('roles')->select('id', 'name', 'guard_name')->get();
  
        return view("backend.roles.index", compact("roles"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.roles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string','max:8'],
        ]);
        try {
            DB::table('roles')->insert([
                'name' => $request->name,
                'guard_name' => 'user',
            ]);
            return back()->with('success','roles berhasil dibuat');
        } catch (\Throwable $th) {
            return back()->with('error-store', $th->getMessage());
        }

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        try {
            $request->validate([
                'name' => ['required', 'string','max:8'],
            ]);
            DB::table('roles')->where('id', $id)->update([
                'name' => $request->name,
                'guard_name' => 'user',
            ]);
            return back()->with('success','roles berhasil dirubah');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            DB::table('roles')->where('id', $id)->delete();
            return back()->with('success','roles berhasil dihapus');
        } catch (\Throwable $th) {
            return back()->with('error','roles gagal dihapus');
        }
    }
}
