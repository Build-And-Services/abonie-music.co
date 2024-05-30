<?php

namespace App\Http\Controllers\Api;

use App\Http\Resources\ShortLinkResource;
use App\Models\Status;
use App\Models\ShortLink;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class ApiShortLinkController extends BaseController
{
    public function index()
    {
        try {
            $shortlink = ShortLink::with('statuses')->get();
            return $this->sendResponse(ShortLinkResource::collection($shortlink), 'Successfully get data', 200);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), 400);
        }
    }

    public function store(Request $request)
    {
        // dd($request->original_link);
        try {
            if ($request->has('short_name')) {
                $request->merge([
                    'short_name' => str_replace(' ', '-', $request->short_name)
                ]);
            }
            $request->validate([
                'original_link' => 'required|url',
                'short_name' => 'nullable|regex:/^\S*$/u|unique:short_links,short_name',
            ]);
            DB::beginTransaction();
            if ($request->filled('short_name')) {
                $baseUrl = config('app.url');
                $result_link = 'http://shrtlink.co.id/' . $request->short_name;
                $shortlink = ShortLink::create([
                    'original_link' => $request->original_link,
                    'short_name' => $request->short_name,
                    'result_link' => $result_link,
                ]);
                $status = new Status(['status' => true]);
                $shortlink->statuses()->save($status);
            } else {
                $short_name = $this->generateUniqueShortCode();
                $baseUrl = config('app.url');
                $result_link = 'http://shrtlink.co.id/' . $short_name;
                $shortlink = ShortLink::create([
                    'original_link' => $request->original_link,
                    'short_name' => $short_name,
                    'result_link' => $result_link,
                ]);
                $status = new Status(['status' => true]);
                $shortlink->statuses()->save($status);
            }

            DB::commit();
            return $this->sendResponse(new ShortLinkResource($shortlink), 'Successfully created data', 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendError($th->getMessage(), 400);
        }
    }

    public function show($short_name)
    {
        try {
            $shortlink = ShortLink::where('short_name', $short_name)->firstOrFail();
            return $this->sendResponse(new ShortLinkResource($shortlink), 'Successfully get data', 200);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), 400);
        }
    }

    private function generateUniqueShortCode()
    {
        $baseUrl = config('app.url');
        do {
            $short_name = Str::random(6);
        } while (ShortLink::where('short_name', 'http://shrtlink.co.id/' . $short_name)->exists());

        return $short_name;
    }
}
