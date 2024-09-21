<?php

namespace App\Http\Controllers;

use App\Models\Biolink;
use App\Models\Presave;
use Illuminate\Http\Request;

class PreviewController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($id)
    {
        $biolink = Biolink::where("id", $id)->first();
        return view('frontend.preview.index', compact('biolink'));
    }

    public function presave($id)
    {
        $presave = Presave::with('links')->where('id', $id)->first();
        return view('frontend.preview.presave', compact('presave'));
    }

    public function resultPresave($slug)
    {
        $presave = Presave::with('links')->where('slug', $slug)->first();
        return view('frontend.preview.presave', compact('presave'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
