<?php

namespace App\Http\Controllers;

use App\Models\Biolink;
use App\Models\Platform;
use App\Models\Presave;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

class PresaveController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $presaves = Presave::all();
        return view('backend.presave.index', compact("presaves"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        try {
            DB::beginTransaction();
            $platforms = DB::table('platforms')->select('id', 'name', 'thumbnail')->where('type', 'PRESAVE')->get();
            DB::commit();
            return view('backend.presave.create', compact('platforms'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "title" => 'required|min:3',
            "link" => 'required|unique:presaves',
        ]);

        try {
            $presave = Presave::create([
                'title' => $request->title,
                'link' => $request->link,
            ]);
            return redirect()->route('presave.edit', $presave->id)->with('success', 'Berhasil ditambah');
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('backend.presave.detail');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        try {
            DB::beginTransaction();
            $platforms = DB::table('platforms')->select('id', 'name', 'thumbnail')->where('type', 'PRESAVE')->get();
            $presave = Presave::with('links')->select('id', 'title', 'photo', 'link', 'style_link')->where('id', $id)->first();
            DB::commit();
            return view('backend.presave.create', compact('platforms', 'presave'));
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $presaves = Presave::findOrFail($id);

        if ($request->title) {
            $presaves->title = $request->title;
        }
        if ($request->link) {
            $presaves->link = $request->link;
        }

        if ($request->hasFile('photo')) {
            $fileName = basename($presaves->photo);
            // dd($fileName);
            if (File::exists(public_path('assets-dashboard/images/presave/' . $fileName))) {
                File::delete(public_path('assets-dashboard/images/presave/' . $fileName));
            }

            $filename = time() . '.' . $request->file('photo')->getClientOriginalExtension();
            $filepath = public_path('assets-dashboard/images/presave');
            $request->file('photo')->move($filepath, $filename);
            $presaves->photo = url('/assets-dashboard/images/presave/' . $filename);
        }
        $presaves->save();

        return redirect()->back()->with('success', 'Data Berhasil diubah');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
    }
}
