<?php

namespace App\Http\Controllers\Api;

use App\Models\View;
use App\Models\Biolink;
use App\Models\Presave;
use App\Models\ShortLink;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Resources\CountViewResource;

class ApiCountViewController extends BaseController
{
    public function index()
    {
        try {
            $views = View::with(['viewable'])->get();
            return $this->sendResponse(CountViewResource::collection($views), 'Successfully get data', 200);
        } catch (\Throwable $th) {
            return $this->sendError($th->getMessage(), 400);
        }
    }

    public function update(Request $request, $short_name)
    {
        try {
            DB::beginTransaction();
            $updateData = null;
            if ($request->type == 'shortlink') {
                $shortlink = ShortLink::where('short_name', $short_name)->firstOrFail();
                $shortlink->viewable()->update(['count' => $shortlink->viewable->count + 1]);
                $updateData = $shortlink;
            } elseif ($request->type == 'biolink') {
                $biolink = Biolink::where('name', $short_name)->firstOrFail();
                $biolink->viewable()->update(['count' => $biolink->viewable->count + 1]);
                $updateData = $biolink;
            } else {
                $presave = Presave::where('slug', $short_name)->firstOrFail();
                $presave->viewable()->update(['count' => $presave->viewable->count + 1]);
                $updateData = $presave;
            }
            DB::commit();
            return $this->sendResponse(new CountViewResource($updateData), 'Successfully update count', 200);
        } catch (\Throwable $th) {
            DB::rollBack();
            return $this->sendError($th->getMessage(), 400);
        }
    }
}
