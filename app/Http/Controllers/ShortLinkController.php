<?php

namespace App\Http\Controllers;

use App\Models\View;
use App\Models\Status;
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
                $baseUrl = config('app.url');
                $result_link = 'http://shrtlink.co.id/' . $request->short_name;
                $shortlink = ShortLink::create([
                    'id_user' => Auth::user()->id,
                    'original_link' => $request->original_link,
                    'short_name' => $request->short_name,
                    'result_link' => $result_link,
                ]);
                $status = new Status(['status' => true]);
                $count = new View(['count' => 0]);
                $shortlink->viewable()->save($count);
                $shortlink->statuses()->save($status);
            } else {
                $short_name = $this->generateUniqueShortCode();
                $baseUrl = config('app.url');
                $result_link = 'http://shrtlink.co.id/' . $short_name;
                $shortlink = ShortLink::create([
                    'id_user' => Auth::user()->id,
                    'original_link' => $request->original_link,
                    'short_name' => $short_name,
                    'result_link' => $result_link,
                ]);
                $status = new Status(['status' => true]);
                $count = new View(['count' => 0]);
                $shortlink->viewable()->save($count);
                $shortlink->statuses()->save($status);
            }

            DB::commit();

            $fullShortUrl = url($shortlink->result_link);
            return redirect()->back()->with('success', 'Shortlink created successfully ! ')->with('fullShortUrl', $fullShortUrl);

        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function show($id)
    {
        try {
            DB::beginTransaction();
            $shortlink = ShortLink::findOrFail($id);
            return view('backend.shortlinks.edit', [
                'getShortlink' => $shortlink
            ]);
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function update(Request $request, $id)
    {
        try {
            // Validasi
            $request->validate([
                'original_link' => 'sometimes|required|url',
                'short_name' => 'sometimes|nullable|regex:/^\S*$/u|unique:short_links,short_name,' . $id,
            ]);

            DB::beginTransaction();

            $shortlink = ShortLink::findOrFail($id);

            if ($request->has('status') && !$request->filled('original_link') && !$request->filled('short_name')) {
                $status = $request->status;
                $shortlink->statuses()->update(['status' => $status]);
                DB::commit();

                $fullShortUrl = url($shortlink->result_link);
                if ($status == 0) {
                    return redirect()->route('short.index')->with('warning', 'Shortlink has been banned.');
                }
                return redirect()->route('short.index')->with('success', 'Shortlink updated successfully!')->with('fullShortUrl', $fullShortUrl);
            } else {
                $data = [];
                if ($request->filled('short_name')) {
                    $baseUrl = config('app.url');
                    $result_link = 'http://shrtlink.co.id/' . $request->short_name;
                    $data['original_link'] = $request->original_link;
                    $data['short_name'] = $request->short_name;
                    $data['result_link'] = $result_link;
                }else {
                    $short_name = $this->generateUniqueShortCode();
                    $baseUrl = config('app.url');
                    $result_link = 'http://shrtlink.co.id/' . $short_name;
                    $data['original_link'] = $request->original_link;
                    $data['result_link'] = $result_link;
                    $data['short_name'] = $short_name;
                }

                if (!empty($data)) {
                    $shortlink->update($data);
                }

                if ($request->has('status')) {
                    $status = $request->status;
                    $shortlink->statuses()->update(['status' => $status]);
                }
            }

            DB::commit();
            $fullShortUrl = url($shortlink->result_link);
            if ($request->has('status') && $request->status == 0) {
                return redirect()->route('short.index')->with('success', 'Shortlink has been banned.');
            }
            return redirect()->route('short.index')->with('success', 'Shortlink updated successfully!')->with('fullShortUrl', $fullShortUrl);
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with('error', $th->getMessage());
        }
    }

    public function destroy($id)
    {
        try {
            $shortlink = ShortLink::findOrFail($id);
            $shortlink->delete();
            return redirect()->back()->with('success', 'Shortlink deleted successfully!');
        } catch (\Throwable $th) {
            return redirect()->back()->with('error', $th->getMessage());
        }
    }


    // public function redirect($short_name)
    // {
    //     try {
    //         $shortlink = ShortLink::where('short_name', $short_name)->firstOrFail();
    //         return redirect($shortlink->original_link);
    //     } catch (\Throwable $th) {
    //         return redirect()->back()->with('error', $th->getMessage());
    //     }
    // }

    private function generateUniqueShortCode()
    {
        do {
            $baseUrl = config('app.url');
            $short_name = Str::random(6);
        } while (ShortLink::where('short_name', 'http://shrtlink.co.id/' . $short_name)->exists());

        return $short_name;
    }
}
