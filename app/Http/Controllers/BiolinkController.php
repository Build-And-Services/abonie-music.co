<?php

namespace App\Http\Controllers;

use App\Models\Biolink;
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
        //
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
