<?php

namespace App\Http\Controllers;

use App\Models\Biolink;
use App\Models\StyleLink;
use Illuminate\Http\Request;

class BiolinkController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $biolinks = Biolink::all();
        return view("backend.biolink.index", compact("biolinks"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("backend.biolink.create");
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name" => 'required|min:3',
            "description" => 'required',
            "link" => 'required|unique:biolinks',
        ]);

        try {
            // $biolinks = Biolink::create($request->all());
            if($request->hasFile('profile')) {
                $filename = time().'.'.$request->file('profile')->getClientOriginalExtension();
                $filepath = public_path('assets-dashboard/images/users');
                $request->file('profile')->move($filepath, $filename);
                $biolinks = Biolink::create([
                    'name' => $request->name,
                    'link' => $request->link,
                    'description' => $request->description,
                    'photo' => '/assets-dashboard/images/users/'.$filename,
                ]);

                $style = StyleLink::create([
                    'biolink_id' => $biolinks->id,
                ]);

                return redirect()->route('biolink.edit', $biolinks->id)->with('success','Berhasil ditambah');
            }else{
                return back()->with('error', 'Profile is required');
            }
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());
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
        try {
            $biolinks = Biolink::findOrFail($id);
            $styleLink = StyleLink::where('biolink_id', $id)->first();
            return view("backend.biolink.create", compact("biolinks", "styleLink"));
        } catch (\Throwable $th) {
            return back()->with('error', $th->getMessage());

        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
