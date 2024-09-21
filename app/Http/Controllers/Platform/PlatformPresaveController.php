<?php

namespace App\Http\Controllers\Platform;

use App\Http\Controllers\Controller;
use App\Models\Platform;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Redirect;

class PlatformPresaveController extends Controller
{
    public function __construct()
    {
        if (!Auth::user()->hasRole('superadmin')) {
            Redirect::to("/dashboard")->send();
        }
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        try {
            DB::beginTransaction();
            $platforms = DB::table('platforms')->select('id', 'name', 'url', 'thumbnail')->where('type', 'PRESAVE')->get();
            DB::commit();
            return view('backend.platform.presave.index', compact('platforms'));
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
            'name' => 'required|max:255',
            'url' => 'max:255',
            'thumbnail' => 'required|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $thumbnailName = time() . '.' . $request->thumbnail->extension();
        $request->thumbnail->move(public_path('assets-dashboard/images/platform/presave'), $thumbnailName);
        try {
            DB::beginTransaction();
            DB::table('platforms')->insert([
                'name' => $request->name,
                'url' => $request->url,
                'thumbnail' => url('assets-dashboard/images/platform/presave/' . $thumbnailName),
                'type' => 'PRESAVE',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
            DB::commit();
            return redirect()->back()->with('success', 'Success add platform');
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $validationData = $request->validate([
            'name' => 'required|max:255',
            'url' => 'required|max:255',
            'thumbnail' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
        try {
            DB::beginTransaction();
            $platform = Platform::where('id', $id)->first();
            if ($request->hasFile('thumbnail')) {
                $fileName = basename($platform->thumbnail);
                if (File::exists(public_path('assets-dashboard/images/platform/presave/' . $fileName))) {
                    File::delete(public_path('assets-dashboard/images/platform/presave/' . $fileName));
                }
                $thumbnailName = time() . '.' . $request->thumbnail->extension();
                $request->thumbnail->move(public_path('assets-dashboard/images/platform/presave'), $thumbnailName);
                $validationData['thumbnail'] = url("assets-dashboard/images/platform/presave/" . $thumbnailName);
            }

            $platform->name = $validationData["name"];
            $platform->url = $validationData["url"];
            $platform->thumbnail = $validationData["thumbnail"] ?? $platform->thumbnail;
            $platform->save();
            DB::commit();
            return redirect()->back()->with('success', 'Success update platform');
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
            return redirect()->back()->withError($e->getMessage());
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try {
            DB::beginTransaction();
            $platform = Platform::where('id', $id)->first();
            $fileName = basename($platform->thumbnail);
            if (File::exists(public_path('assets-dashboard/images/platform/presave/' . $fileName))) {
                File::delete(public_path('assets-dashboard/images/platform/presave/' . $fileName));
            }
            $platform->delete();
            DB::commit();
            return redirect()->back()->with('success', 'Success delete platform');
        } catch (\Throwable $e) {
            DB::rollBack();
            return redirect()->back()->withError($e->getMessage());
        } catch (\Illuminate\Database\QueryException $e) {
            DB::rollBack();
            return redirect()->back()->withError($e->getMessage());
        }
    }
}
