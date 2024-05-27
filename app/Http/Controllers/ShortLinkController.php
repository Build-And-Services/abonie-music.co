<?php

namespace App\Http\Controllers;

use App\Models\ShortLink;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ShortLinkController extends Controller
{
    public function index()
    {
        try {
            $shortlinks = ShortLink::all();
            return view('backend.shortlinks.index', [
                'shorts' => $shortlinks
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function store(Request $request)
    {
        try {
            $request->validate([
                'original_link' => 'required|url',
                'short_name' => 'nullable|regex:/^\S*$/u|unique:short_links,short_name',
            ]);
            DB::beginTransaction();
            if ($request->filled('short_name')) {
                $result_link = 'http://localhost:8000/music.co/' . $request->short_name;
                $shortlink = ShortLink::create([
                    'id_user' => Auth::user()->id,
                    'original_link' => $request->original_link,
                    'short_name' => $request->short_name,
                    'result_link' => $result_link,
                ]);
            } else {
                $result_link = 'http://localhost:8000/music.co/' . $this->generateUniqueShortCode();
                $shortlink = ShortLink::create([
                    'id_user' => Auth::user()->id,
                    'original_link' => $request->original_link,
                    'short_name' => $request->short_name,
                    'result_link' => $result_link,
                ]);
            }

            DB::commit();

            $fullShortUrl = url($shortlink->result_link);
            return redirect()->back()->with('success', 'Shortlink created successfully ! ')->with('fullShortUrl', $fullShortUrl);

        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function redirect($short_name)
    {
        try {
            $shortlink = ShortLink::where('short_name', $short_name)->firstOrFail();
            return redirect($shortlink->original_link);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    private function generateUniqueShortCode()
    {
        do {
            $short_name = Str::random(6);
        } while (ShortLink::where('short_name', 'http://localhost:8000/music.co/' . $short_name)->exists());

        return $short_name;
    }
}
